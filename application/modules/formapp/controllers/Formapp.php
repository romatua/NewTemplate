<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Formapp extends MX_Controller {

    function __construct() {
        parent::__construct();

        if (!$this->ion_auth->logged_in()) {
            redirect('auth/login');
        }

        $this->load->database();
        $this->load->helper('url');
        $this->load->library('custom_grocery_crud');
        $this->load->library('Gc_dependent_select');
        $this->load->model('Grocery_crud_model');
        $this->load->model('m_get_data');
    }

#end __construct

    /* Peserta Disetujui */

    public function readytoclaim() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();

        $state = $crud->getState();

        $crud
                ->set_table('m_peserta')
                ->set_subject('Registrasi Klaim')
                ->set_relation('id_jeniskredit', 'm_jeniskredit', 'deskripsi')
                ->set_relation('id_status_transaksi', 'status_transaksi', 'status_transaksi')
                ->set_relation('id_jeniskelamin', 'm_jeniskelamin', 'jeniskelamin')
                ->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws')
                ;

        $crud->where('m_peserta.id_status_transaksi in (2,3) '
                . ' AND id_peserta NOT IN (SELECT distinct ifnull(id_peserta,0) FROM klaim )'
                . ' AND 1 = ', "1");
        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'adminbank'))) {
            $crud->where('m_peserta.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
//        $crud->order_by('id_peserta','desc');
        //$crud->add_fields('nomor_polis','Jenis_pertanggungan','nama_peserta','tgl_lahir','usia_masuk','jenis_kelamin','id_kredit','grace_priode','masa_asuransi','tgl_mulai','tgl_akhir','nilai_pertanggungan');
        if ($state == 'export') {
            $crud->columns('kc_kcp', 'nomor_PK', 'nomor_rekening', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'days_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'usia_jatuhtempo', 'premi');
        } else {
            $crud->columns('kc_kcp', 'nama_peserta', 'tgl_lahir', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tarif_premi', function($value) {
                return number_format($value, 3);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });

            $crud->callback_column('tgl_lahir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_mulai', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_akhir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
        }
        $crud->edit_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi', 'is_refund','nilai_refund', 'created_date', 'approved_by', 'approved_date');
        $crud->fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
        $crud->required_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'jenis_kelamin', 'id_kredit', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi');

        $crud
                ->display_as('kc_kcp', 'KC/KCP BWS')
                ->display_as('nomor_polis', 'Nomor Polis')
                ->display_as('nik', 'NIK')
                ->display_as('nama_peserta', 'Nama Peserta')
                ->display_as('tmp_lahir', 'Tempat Lahir')
                ->display_as('tgl_lahir', 'Tanggal Lahir')
                ->display_as('id_jeniskredit', 'Jenis Kredit')
                ->display_as('id_jeniskelamin', 'Jenis Kelamin')
                ->display_as('tgl_mulai', 'Mulai Asuransi')
                ->display_as('masa_asuransi', 'Masa Asuransi')
                ->display_as('grace_priode', 'Grace Priode')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('usia_masuk', 'Usia')
                ->display_as('tgl_akhir', 'Akhir Asuransi')
                ->display_as('usia_jatuhtempo', 'Usia Jatuh Tempo')
                ->display_as('tarif_premi', 'Tarif Premi')
                ->display_as('premi', 'Premi')
                ->display_as('nomor_PK', 'Nomor PK')
                ->display_as('id_status_transaksi', 'Status')
                ->display_as('approved_by', 'Verifikator')
                ->display_as('approved_date', 'Tgl Verifikasi')
                ->display_as('tgl_bayar', 'Tanggal Bayar')
                ->display_as('nomor_jurnal', 'Nomor Journal')
                ->display_as('nomor_rekening', 'Nomor Rekening')
                ->display_as('nomor_vacc', 'Nomor Virtual Account')
                ->display_as('unique_number', 'Unique Number')
                ->display_as('id_payment', 'Status Payment')
                ->display_as('created_by', 'Create By')
                ->display_as('created_date', 'Tgl Transaksi');

        //Scope Read
        $crud->callback_read_field('grace_priode', function ($value) {
            return '<div id="field-grace_priode" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('masa_asuransi', function ($value) {
            return '<div id="field-masa_asuransi" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('usia_masuk', function ($value) {
            return '<div id="field-usia_masuk" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('usia_jatuhtempo', function ($value) {
            return '<div id="field-usia_jatuhtempo" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 3) . ' &permil;</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_read_field('tgl_lahir', function ($value) {
            return '<div id="field-tgl_lahir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_mulai', function ($value) {
            return '<div id="field-tgl_mulai" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_akhir', function ($value) {
            return '<div id="field-tgl_akhir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        // End Read
//        $crud->add_action('Cetak Sertifikat', '', 'cetak/sertifikat', 'print target');
//        $crud->add_action('Klaim', '', 'klaim/pengajuan/add', 'print target');
        $crud->add_action('Klaim', '', '', 'fa fa-arrow-circle-right', function ($primary_key, $row) {
            return site_url('klaim/pengajuan/add/') . $row->id_peserta;
        });

        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
        $crud->unset_print();
        $crud->unset_export();
        $output = $crud->render();

        $data = array();
        $data['title'] = "REGISTRASI KLAIM";
        $output->data = $data;

        $view = 'formapp_ultra'; //$this->switch_control($this->uri->segment(2));
        $this->_master_output($view, $output);
    }

#End approve_kondisi_a

    /* Calon Peserta */

    public function daftar_calon_peserta() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();
        $time_form = date("Y-m-d H:i:s");
        $user_form = $user->first_name . ' ' . $user->last_name; //$user->username;

        $state = $crud->getState();

        $crud
                ->set_table('m_peserta')
                ->set_subject('Daftar Calon Peserta')
                ->set_relation('id_jeniskredit', 'm_jeniskredit', 'deskripsi')
                ->set_relation('id_status_transaksi', 'status_transaksi', 'status_transaksi', array('id_status_transaksi IN (1,3) AND 1 =' => '1'), 'id_status_transaksi ASC')
                ->set_relation('id_jeniskelamin', 'm_jeniskelamin', 'jeniskelamin')
                ->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws')
                ;

        $crud->where(' m_peserta.id_status_transaksi in (1) '
                . ' AND 1 = ', "1");
        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'adminbank'))) {
            $crud->where('m_peserta.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
        if ($state == 'export') {
            $crud->columns('nomor_PK', 'nama_peserta', 'nik', 'pekerjaan','alamat_peserta','alamat_agunan', 'kc_kcp', 'nomor_rekening', 'id_jeniskredit', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi', 'is_refund','nilai_refund', 'created_date');
        }else {
            $crud->columns('cb', 'kc_kcp', 'nama_peserta', 'id_jeniskredit', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi', 'created_date');
            $crud->callback_column('cb', array($this, '_callback_webpage_url'));
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tarif_premi', function($value) {
                return number_format($value, 2);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });

            $crud->callback_column('tgl_lahir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_mulai', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_akhir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
        }
        $crud->edit_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi', 'is_refund','nilai_refund','id_status_transaksi','approved_by','approved_date');
        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi', 'is_refund','nilai_refund', 'created_date');
//        $crud->fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
//        $crud->required_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'jenis_kelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi');

        $crud
                ->display_as('cb', '')
                ->display_as('kc_kcp', 'KC/KCP')
                ->display_as('nomor_polis', 'Nomor Sertifikat')
                ->display_as('nik', 'NIK')
                ->display_as('nama_peserta', 'Nama Peserta')
                ->display_as('tmp_lahir', 'Tempat Lahir')
                ->display_as('tgl_lahir', 'Tanggal Lahir')
                ->display_as('id_jeniskredit', 'Jenis Kredit')
                ->display_as('id_jeniskelamin', 'Jenis Kelamin')
                ->display_as('tgl_mulai', 'Mulai Asuransi')
                ->display_as('masa_asuransi', 'Masa Asuransi')
                ->display_as('grace_priode', 'Grace Priode')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('usia_masuk', 'Usia')
                ->display_as('tgl_akhir', 'Akhir Asuransi')
                ->display_as('usia_jatuhtempo', 'Usia Jatuh Tempo')
                ->display_as('tarif_premi', 'Tarif Premi')
                ->display_as('premi', 'Premi')
                ->display_as('nomor_PK', 'Nomor PK')
                ->display_as('id_status_transaksi', 'Status')
                ->display_as('approved_by', 'Approved By')
                ->display_as('approved_date', 'Approved Date')
                ->display_as('tgl_bayar', 'Tanggal Bayar')
                ->display_as('nomor_jurnal', 'Nomor Journal')
                ->display_as('nomor_rekening', 'Nomor Rekening')
                ->display_as('nomor_vacc', 'Nomor Virtual Account')
                ->display_as('unique_number', 'Unique Number')
                ->display_as('id_payment', 'Status Payment')
                ->display_as('created_by', 'Create By')
                ->display_as('created_date', 'Tgl Transaksi');
        
        $crud
                ->field_type('is_refund', 'true_false', array("Tidak","Ya"))
                ->field_type('kc_kcp', 'readonly')
                ->field_type('id_jeniskredit', 'readonly')
                ->field_type('nomor_PK', 'readonly')
                ->field_type('nomor_rekening', 'readonly')
                ->field_type('tgl_lahir', 'readonly')
                ->field_type('id_jeniskelamin', 'readonly')
                ->field_type('nama_peserta', 'readonly')
                ->field_type('masa_asuransi', 'readonly')
                ->field_type('tgl_mulai', 'readonly')
                ->field_type('tgl_akhir', 'readonly')
                ->field_type('nilai_pertanggungan', 'readonly')
                ->field_type('tarif_premi', 'readonly')
                ->field_type('premi', 'readonly')
                ->unset_texteditor('alamat_peserta')
                ->unset_texteditor('alamat_agunan')
                ->field_type('approved_by', 'hidden', $user_form)
                ->field_type('approved_date', 'hidden', $time_form)
                ;
        $crud->callback_column('nik', function($value) {
            $strnik = substr_replace($value, '-', 6, 0);
            return $strnik;
        });
        $crud->callback_column('nomor_rekening', function($value) {
            $strrek = substr_replace($value, '-', 3, 0);
            return $strrek;
        });
        
        //Scope Read
        $crud->callback_read_field('grace_priode', function ($value) {
            return '<div id="field-grace_priode" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('masa_asuransi', function ($value) {
            return '<div id="field-masa_asuransi" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('usia_masuk', function ($value) {
            return '<div id="field-usia_masuk" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('usia_jatuhtempo', function ($value) {
            return '<div id="field-usia_jatuhtempo" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 2) . ' &permil;</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_edit_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_edit_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 2) . ' &permil;</div>';
        });
        $crud->callback_edit_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_read_field('tgl_lahir', function ($value) {
            return '<div id="field-tgl_lahir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_mulai', function ($value) {
            return '<div id="field-tgl_mulai" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_akhir', function ($value) {
            return '<div id="field-tgl_akhir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        // End Read

        $crud->unset_add();
        $crud->unset_print();
        $crud->callback_after_update(array($this,'update_approval'));
        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR CALON PESERTA";
        $output->data = $data;

        $view = 'calonpeserta';
        $this->_master_output($view, $output);
    }
    
    public function _callback_webpage_url($value, $row) {
        $id = $row->id_peserta;
        $cb = "<input type='checkbox' name='custom_checkbox' value='" . $id . "' />";
        return $cb;
    }
    
    function submit_peserta() {
        //print_r($_POST);
        $id_array = array();
        $selection = $this->input->post("selection", TRUE);
        $id_array = explode("|", $selection);

        foreach ($id_array as $item):
            if ($item != ''):
                //update
                $sql = "UPDATE m_peserta SET id_status_transaksi = '3' WHERE id_peserta = '" . $item . "'; ";
                $query = $this->db->query($sql);
            //DELETE ROW
            //$this->db->where('id', $item);
            //$this->db->delete('customers');
            endif;
        endforeach;
    }
    
    function update_approval($post_array) {
        $user = $this->ion_auth->user()->row();
        $post_array['approved_date'] = date("Y-m-d H:i:s");
        $post_array['approved_by'] = $user->first_name .' '. $user->last_name;
        
        return $post_array;
    }

#End approve_kondisi_a

    public function daftar_peserta() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();
        $state = $crud->getState();
        $crud
                ->set_table('m_peserta')
                ->set_subject('Daftar Peserta Disetujui')
                ->set_relation('id_jeniskredit', 'm_jeniskredit', 'deskripsi')
                ->set_relation('id_status_transaksi', 'status_transaksi', 'status_transaksi')
                ->set_relation('id_jeniskelamin', 'm_jeniskelamin', 'jeniskelamin')
                ->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws', null, 'nama_cabang_bws ASC')
                ;

        $crud->where('m_peserta.id_status_transaksi in (2,3) '
                . ' AND 1 = ', "1");
        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank'))) {
            $crud->where('m_peserta.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
//        if (!empty($this->uri->segment(3))) {
//            $crud->where('m_peserta.kc_kcp = "'.$this->uri->segment(3).'" AND 1 = ',"1");
//        }
//        $crud->order_by('id_peserta', 'desc');

        if ($state == 'export') {
            $crud->columns('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi', 'is_refund','nilai_refund', 'created_date','approved_by','approved_date');
        } else {
            $crud->columns('kc_kcp', 'nama_peserta', 'tgl_lahir', 'id_jeniskredit', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','outstanding_premi');
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tarif_premi', function($value) {
                return number_format($value, 3);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tgl_lahir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_mulai', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_akhir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
        }
        $crud->edit_fields('nomor_PK', 'nomor_rekening', 'nik', 'nama_peserta', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi','is_refund','nilai_refund');
//        $crud->edit_fields('nomor_PK', 'nomor_rekening');
        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi', 'is_refund','nilai_refund', 'created_date','approved_by','approved_date');
//        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','is_refund','nilai_refund', 'created_by', 'created_date');
//        $crud->fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
//        $crud->required_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'jenis_kelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');

        $crud
                ->display_as('kc_kcp', 'KC/KCP')
                ->display_as('nomor_polis', 'Nomor Polis')
                ->display_as('nik', 'NIK')
                ->display_as('nama_peserta', 'Nama Peserta')
                ->display_as('tmp_lahir', 'Tempat Lahir')
                ->display_as('tgl_lahir', 'Tanggal Lahir')
                ->display_as('id_jeniskredit', 'Jenis Kredit')
                ->display_as('id_jeniskelamin', 'Jenis Kelamin')
                ->display_as('tgl_mulai', 'Mulai Asuransi')
                ->display_as('masa_asuransi', 'Masa Asuransi')
                ->display_as('grace_priode', 'Grace Priode')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('usia_masuk', 'Usia')
                ->display_as('tgl_akhir', 'Akhir Asuransi')
                ->display_as('usia_jatuhtempo', 'Usia Jatuh Tempo')
                ->display_as('tarif_premi', 'Tarif Premi')
                ->display_as('premi', 'Premi')
                ->display_as('outstanding_premi', 'Outstanding')
                ->display_as('nomor_PK', 'Nomor PK')
                ->display_as('id_status_transaksi', 'Status')
                ->display_as('approved_by', 'Verifikator')
                ->display_as('approved_date', 'Tgl Verifikasi')
                ->display_as('tgl_bayar', 'Tanggal Bayar')
                ->display_as('nomor_jurnal', 'Nomor Journal')
                ->display_as('nomor_rekening', 'Nomor Rekening')
                ->display_as('nomor_vacc', 'Nomor Virtual Account')
                ->display_as('unique_number', 'Unique Number')
                ->display_as('id_payment', 'Status Payment')
                ->display_as('is_refund', 'Refund')
                ->display_as('created_by', 'Create By')
                ->display_as('created_date', 'Tgl Transaksi');

        $crud
                ->field_type('is_refund', 'true_false', array("Tidak","Ya"));
        
        if ($state == 'edit' || $state == 'update' || $state == 'update_validation') {
            if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen'))) {
            $crud
                    ->field_type('nomor_PK', 'readonly')
                    ->field_type('nomor_rekening', 'readonly')
                    ->field_type('nik', 'readonly')
                    ->field_type('nama_peserta', 'readonly')
                    ->field_type('masa_asuransi', 'readonly')
                    ->field_type('tgl_mulai', 'readonly')
                    ->field_type('tgl_akhir', 'readonly')
                    ->field_type('nilai_pertanggungan', 'readonly')
                    ->field_type('premi', 'readonly');
            }
        }

        $crud->callback_column('nik', function($value) {
            $strnik = substr_replace($value, '-', 6, 0);
            return $strnik;
        });
        $crud->callback_column('nomor_rekening', function($value) {
            $strrek = substr_replace($value, '-', 3, 0);
            return $strrek;
        });

        //Scope Read
        $crud->callback_read_field('grace_priode', function ($value) {
            return '<div id="field-grace_priode" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('masa_asuransi', function ($value) {
            return '<div id="field-masa_asuransi" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('usia_masuk', function ($value) {
            return '<div id="field-usia_masuk" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('usia_jatuhtempo', function ($value) {
            return '<div id="field-usia_jatuhtempo" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 2) . ' &permil;</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_edit_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_edit_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 2) . ' &permil;</div>';
        });
        $crud->callback_edit_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_read_field('tgl_lahir', function ($value) {
            return '<div id="field-tgl_lahir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_mulai', function ($value) {
            return '<div id="field-tgl_mulai" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_akhir', function ($value) {
            return '<div id="field-tgl_akhir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        // End Read
        $url_callback_print = function($primary_key, $row) {
            return "javascript:window.open('" . base_url('cetak/sertifikat') . '/' . $primary_key . "')";
        };
        $crud->add_action('Cetak Sertifikat', '', 'cetak/sertifikat', 'target fa fa-file-pdf-o', $url_callback_print);
//        $crud->add_action('Klaim', '', 'klaim/pengajuan/add', 'print target');

        //$crud->unset_add();
        $crud->unset_delete();      
        $crud->unset_print();
        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR PESERTA DISETUJUI";
        $output->data = $data;

        $view = 'formapp_ultra';
        $this->_master_output($view, $output);
    }

    public function daftar_peserta_tanpa_polis() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();
        $state = $crud->getState();
        $crud
                ->set_table('m_peserta')
                ->set_subject('Daftar Peserta Disetujui')
                ->set_relation('id_jeniskredit', 'm_jeniskredit', 'deskripsi')
                ->set_relation('id_status_transaksi', 'status_transaksi', 'status_transaksi')
                ->set_relation('id_jeniskelamin', 'm_jeniskelamin', 'jeniskelamin')
                ->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws', null, 'nama_cabang_bws ASC')
                ;

        $crud->where('ifnull(nomor_polis,"") = "" and m_peserta.id_status_transaksi in (2,3) '
                . ' AND 1 = ', "1");
        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank'))) {
            $crud->where('m_peserta.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
//        if (!empty($this->uri->segment(3))) {
//            $crud->where('m_peserta.kc_kcp = "'.$this->uri->segment(3).'" AND 1 = ',"1");
//        }
//        $crud->order_by('id_peserta', 'desc');

        if ($state == 'export') {
            $crud->columns('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'tarif_premi', 'premi_jasindo');
        } else {
            $crud->columns('kc_kcp', 'nama_peserta', 'tgl_lahir', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','outstanding_premi');
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tarif_premi', function($value) {
                return number_format($value, 3);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tgl_lahir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_mulai', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_akhir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
        }
        $crud->edit_fields('nomor_PK', 'nomor_rekening', 'nik', 'nama_peserta', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','is_refund','nilai_refund');
//        $crud->edit_fields('nomor_PK', 'nomor_rekening');
        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi', 'is_refund','nilai_refund', 'created_date','approved_by','approved_date');
//        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','is_refund','nilai_refund', 'created_by', 'created_date');
//        $crud->fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
//        $crud->required_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'jenis_kelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');

        $crud
                ->display_as('kc_kcp', 'KC/KCP')
                ->display_as('nomor_polis', 'Nomor Polis')
                ->display_as('nik', 'NIK')
                ->display_as('nama_peserta', 'Nama Peserta')
                ->display_as('tmp_lahir', 'Tempat Lahir')
                ->display_as('tgl_lahir', 'Tanggal Lahir')
                ->display_as('id_jeniskredit', 'Jenis Kredit')
                ->display_as('id_jeniskelamin', 'Jenis Kelamin')
                ->display_as('tgl_mulai', 'Mulai Asuransi')
                ->display_as('masa_asuransi', 'Masa Asuransi')
                ->display_as('grace_priode', 'Grace Priode')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('usia_masuk', 'Usia')
                ->display_as('tgl_akhir', 'Akhir Asuransi')
                ->display_as('usia_jatuhtempo', 'Usia Jatuh Tempo')
                ->display_as('tarif_premi', 'Tarif Premi')
                ->display_as('premi', 'Premi')
                ->display_as('outstanding_premi', 'Outstanding')
                ->display_as('nomor_PK', 'Nomor PK')
                ->display_as('id_status_transaksi', 'Status')
                ->display_as('approved_by', 'Verifikator')
                ->display_as('approved_date', 'Tgl Verifikasi')
                ->display_as('tgl_bayar', 'Tanggal Bayar')
                ->display_as('nomor_jurnal', 'Nomor Journal')
                ->display_as('nomor_rekening', 'Nomor Rekening')
                ->display_as('nomor_vacc', 'Nomor Virtual Account')
                ->display_as('unique_number', 'Unique Number')
                ->display_as('id_payment', 'Status Payment')
                ->display_as('is_refund', 'Refund')
                ->display_as('created_by', 'Create By')
                ->display_as('created_date', 'Tgl Transaksi');

        $crud
                ->field_type('is_refund', 'true_false', array("Tidak","Ya"));
        if ($state == 'edit' || $state == 'update' || $state == 'update_validation') {
            if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen'))) {
            $crud
                    ->field_type('nomor_PK', 'readonly')
                    ->field_type('nomor_rekening', 'readonly')
                    ->field_type('nik', 'readonly')
                    ->field_type('nama_peserta', 'readonly')
                    ->field_type('masa_asuransi', 'readonly')
                    ->field_type('tgl_mulai', 'readonly')
                    ->field_type('tgl_akhir', 'readonly')
                    ->field_type('nilai_pertanggungan', 'readonly')
                    ->field_type('premi', 'readonly');
            }
        }

        $crud->callback_column('nik', function($value) {
            $strnik = substr_replace($value, '-', 6, 0);
            return $strnik;
        });
        $crud->callback_column('nomor_rekening', function($value) {
            $strrek = substr_replace($value, '-', 3, 0);
            return $strrek;
        });
        //Scope Read
        $crud->callback_read_field('grace_priode', function ($value) {
            return '<div id="field-grace_priode" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('masa_asuransi', function ($value) {
            return '<div id="field-masa_asuransi" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('usia_masuk', function ($value) {
            return '<div id="field-usia_masuk" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('usia_jatuhtempo', function ($value) {
            return '<div id="field-usia_jatuhtempo" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 3) . ' &permil;</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_read_field('tgl_lahir', function ($value) {
            return '<div id="field-tgl_lahir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_mulai', function ($value) {
            return '<div id="field-tgl_mulai" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_akhir', function ($value) {
            return '<div id="field-tgl_akhir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        // End Read

        $crud->unset_add();
        $crud->unset_delete();           
        $crud->unset_print();
        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR PESERTA DISETUJUI";
        $output->data = $data;

        $view = 'formapp';
        $this->_master_output($view, $output);
    }

#End approve_kondisi_a

    public function detail_peserta() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();

        $state = $crud->getState();

        $crud
                ->set_table('m_peserta')
                ->set_subject('Daftar Peserta')
                ->set_relation('id_jeniskredit', 'm_jeniskredit', 'deskripsi')
                ->set_relation('id_status_transaksi', 'status_transaksi', 'status_transaksi')
                ->set_relation('id_jeniskelamin', 'm_jeniskelamin', 'jeniskelamin')
                ->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws')
                ;

        $crud->where('m_peserta.id_status_transaksi in (2,3) '
                . ' AND 1 = ', "1");
        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank'))) {
            $crud->where('m_peserta.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
        if (!empty($this->uri->segment(3))) {
            $crud->where('m_peserta.kc_kcp = "' . $this->uri->segment(3) . '" AND 1 = ', "1");
            $cabangbws = $this->m_get_data->get_namacabangbws($this->uri->segment(3));
        }
//        $crud->order_by('id_peserta', 'desc');

        if ($state == 'export') {
            //echo 'test'; die();
            $crud->columns('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi', 'is_refund','nilai_refund', 'created_date','approved_by','approved_date');
        } else {
            $crud->columns('nama_peserta', 'tgl_lahir', 'id_jeniskredit', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','outstanding_premi');
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('tarif_premi', function($value) {
                return number_format($value, 3);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });

            $crud->callback_column('tgl_lahir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_mulai', function($value) {
                return date('d-m-Y', strtotime($value));
            });
            $crud->callback_column('tgl_akhir', function($value) {
                return date('d-m-Y', strtotime($value));
            });
        }
        $crud->edit_fields('nomor_PK', 'nomor_rekening', 'nik', 'nama_peserta', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi','is_refund','nilai_refund');
        $crud->set_read_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tgl_lahir', 'id_jeniskelamin', 'pekerjaan','alamat_peserta','alamat_agunan', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi', 'is_refund','nilai_refund', 'created_date','approved_by','approved_date');
//        $crud->fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nomor_polis', 'nik', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'id_jeniskelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');
//        $crud->required_fields('kc_kcp', 'nomor_PK', 'nomor_rekening', 'id_jeniskredit', 'nama_peserta', 'tmp_lahir', 'tgl_lahir', 'jenis_kelamin', 'masa_asuransi', 'tgl_mulai', 'tgl_akhir', 'nilai_pertanggungan', 'premi');

        $crud
                ->display_as('kc_kcp', 'KC/KCP')
                ->display_as('nomor_polis', 'Nomor Polis')
                ->display_as('nik', 'NIK')
                ->display_as('nama_peserta', 'Nama Peserta')
                ->display_as('tmp_lahir', 'Tempat Lahir')
                ->display_as('tgl_lahir', 'Tanggal Lahir')
                ->display_as('id_jeniskredit', 'Jenis Kredit')
                ->display_as('id_jeniskelamin', 'Jenis Kelamin')
                ->display_as('tgl_mulai', 'Mulai Asuransi')
                ->display_as('masa_asuransi', 'Masa Asuransi')
                ->display_as('grace_priode', 'Grace Priode')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('usia_masuk', 'Usia')
                ->display_as('tgl_akhir', 'Akhir Asuransi')
                ->display_as('usia_jatuhtempo', 'Usia Jatuh Tempo')
                ->display_as('tarif_premi', 'Tarif Premi')
                ->display_as('premi', 'Premi')
                ->display_as('outstanding_premi', 'OS Premi')
                ->display_as('nomor_PK', 'Nomor PK')
                ->display_as('id_status_transaksi', 'Status')
                ->display_as('approved_by', 'Verifikator')
                ->display_as('approved_date', 'Tgl Verifikasi')
                ->display_as('tgl_bayar', 'Tanggal Bayar')
                ->display_as('nomor_jurnal', 'Nomor Journal')
                ->display_as('nomor_rekening', 'Nomor Rekening')
                ->display_as('nomor_vacc', 'Nomor Virtual Account')
                ->display_as('unique_number', 'Unique Number')
                ->display_as('id_payment', 'Status Payment')
                ->display_as('is_refund', 'Refund')
                ->display_as('created_by', 'Create By')
                ->display_as('created_date', 'Tgl Transaksi');

        $crud
                ->field_type('is_refund', 'true_false', array("Tidak","Ya"))
                ->field_type('nomor_PK', 'readonly')
                ->field_type('nomor_rekening', 'readonly')
                ->field_type('nik', 'readonly')
                ->field_type('nama_peserta', 'readonly')
                ->field_type('masa_asuransi', 'readonly')
                ->field_type('tgl_mulai', 'readonly')
                ->field_type('tgl_akhir', 'readonly')
                ->field_type('nilai_pertanggungan', 'readonly')
                ->field_type('premi', 'readonly');

        $crud->callback_column('nik', function($value) {
            $strnik = substr_replace($value, '-', 6, 0);
            return $strnik;
        });
        $crud->callback_column('nomor_rekening', function($value) {
            $strrek = substr_replace($value, '-', 3, 0);
            return $strrek;
        });
        //Scope Read
        $crud->callback_read_field('grace_priode', function ($value) {
            return '<div id="field-grace_priode" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('masa_asuransi', function ($value) {
            return '<div id="field-masa_asuransi" class="readonly_label">' . $value . ' BULAN</div>';
        });
        $crud->callback_read_field('usia_masuk', function ($value) {
            return '<div id="field-usia_masuk" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('usia_jatuhtempo', function ($value) {
            return '<div id="field-usia_jatuhtempo" class="readonly_label">' . $value . ' TAHUN</div>';
        });
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('tarif_premi', function ($value) {
            return '<div id="field-tarif_premi" style="text-align: right;" class="readonly_label">' . number_format($value, 3) . ' &permil;</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });

        $crud->callback_read_field('tgl_lahir', function ($value) {
            return '<div id="field-tgl_lahir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_mulai', function ($value) {
            return '<div id="field-tgl_mulai" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        $crud->callback_read_field('tgl_akhir', function ($value) {
            return '<div id="field-tgl_akhir" class="readonly_label">' . date('d-m-Y', strtotime($value)) . '</div>';
        });
        // End Read
        $url_callback_print = function($primary_key, $row) {
            return "javascript:window.open('" . base_url('cetak/sertifikat') . '/' . $primary_key . "')";
        };
        $crud->add_action('Cetak Sertifikat', '', 'cetak/sertifikat', 'target fa fa-file-pdf-o', $url_callback_print);
//        $crud->add_action('Klaim', '', 'klaim/pengajuan/add', 'print target');

        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_delete();
        $crud->unset_print();
        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR PESERTA <b>" . strtoupper($cabangbws[0]['nama_cabang_bws']) . "</b>";
        $output->data = $data;

        $view = 'formapp_ultra';
        $this->_master_output($view, $output);
    }

#End approve_kondisi_a
    /* End Disetujui */

    public function daftar_percabang() {
        $crud = new grocery_CRUD;
        //get user
        $user = $this->ion_auth->user()->row();

        $state = $crud->getState();

        $crud
                //->set_table('m_peserta_percabang')
                ->set_table('m_peserta_percabang_kc')
                ->set_subject('Daftar Peserta Per Cabang')
                //->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws')
                //->set_relation('kc_kcp', 'm_cabang_bws', '{kc_kcp} <br><div >{nama_cabang_bws}</div>')
                ->set_primary_key('kc_kcp', 'm_peserta_percabang_kc');
        ;

        if (!$this->ion_auth->in_group(array('admin', 'cabangjasindo', 'manajemen', 'adminbank'))) {
            $crud->where('m_peserta_percabang_kc.kc_kcp = "' . $user->kc_kcp . '" AND 1 = ', "1");
        }
//        $crud->order_by('kc_kcp', 'desc');
        //$crud->add_fields('nomor_polis','Jenis_pertanggungan','nama_peserta','tgl_lahir','usia_masuk','jenis_kelamin','id_kredit','grace_priode','masa_asuransi','tgl_mulai','tgl_akhir','nilai_pertanggungan');
        if ($state == 'export') {
            $crud->set_relation('kc_kcp', 'm_cabang_bws', 'nama_cabang_bws');
            $crud->columns('kc_kcp', 'nilai_pertanggungan', 'premi', 'outstanding_premi', 'jumlah_peserta');
        } else {
            $crud->columns('nkc_kcp', 'nilai_pertanggungan', 'premi', 'outstanding_premi', 'jumlah_peserta');
            $crud->callback_column('nilai_pertanggungan', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('jumlah_peserta', function($value) {
                return number_format($value, 0);
            });
            $crud->callback_column('premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            $crud->callback_column('outstanding_premi', function($value) {
                return number_format($value, 2, ",", ".");
            });
            //$crud->callback_column('kc_kcp', array($this, '_callback_webpage_url_detailpeserta'));
            $crud->callback_column('nkc_kcp', array($this, '_callback_webpage_url_detailpeserta2'));
        }
        //$crud->edit_fields('kc_kcp', 'nilai_pertanggungan', 'premi', 'jumlah_peserta');
        $crud->set_read_fields('nkc_kcp', 'nilai_pertanggungan', 'premi', 'outstanding_premi', 'jumlah_peserta');
        $crud->fields('kc_kcp', 'nilai_pertanggungan', 'premi', 'outstanding_premi', 'jumlah_peserta');
        //$crud->required_fields('kc_kcp', 'nilai_pertanggungan', 'premi', 'jumlah_peserta');

        $crud
                ->display_as('nkc_kcp', 'KC/KCP')
                ->display_as('nilai_pertanggungan', 'Total NP')
                ->display_as('premi', 'Premi')
                ->display_as('outstanding_premi', 'OS Premi')
                ->display_as('jumlah_peserta', 'Jumlah Peserta')
        ;

        //Scope Read
        $crud->callback_read_field('nilai_pertanggungan', function ($value) {
            return '<div id="field-nilai_pertanggungan" class="readonly_label" style="text-align: right;">' . number_format($value, 2, ",", ".") . '</div>';
        });
        $crud->callback_read_field('jumlah_peserta', function ($value) {
            return '<div id="field-jumlah_peserta" style="text-align: right;" class="readonly_label">' . number_format($value, 0) . '</div>';
        });
        $crud->callback_read_field('premi', function ($value) {
            return '<div id="field-premi" class="readonly_label">' . number_format($value, 2, ",", ".") . '</div>';
        });


//        $crud->add_action('detail', '', 'formapp/detail_peserta', 'peserta');
        $crud->unset_add();
        $crud->unset_edit();
        $crud->unset_read();
        $crud->unset_delete();
        $crud->unset_print();

        $output = $crud->render();

        $data = array();
        $data['title'] = "DAFTAR PESERTA PER CABANG";
        $output->data = $data;

        $view = 'formapp_ultra';
        $this->_master_output($view, $output);
    }

    public function _callback_webpage_url_detailpeserta($value, $row) {
        $cabangbws = $this->m_get_data->get_namacabangbws($value);
        if (array_key_exists('0', $cabangbws)) {
            $nama_cabang_bws = $cabangbws[0]['nama_cabang_bws'];
        } else {
            $nama_cabang_bws = '';
        }
        return "<span style=\"width:100%;text-align:left;display:block;\"><a href=" . site_url('formapp/detail_peserta/') . $value . ">" . $nama_cabang_bws . "</a></span>";
//        return "<span style=\"width:100%;text-align:left;display:block;\"><a href=" . site_url('formapp/detail_peserta/') . $row->id . ">" . $value . "</a></span>";           
    }

    public function _callback_webpage_url_detailpeserta2($value, $row) {
        $kode_cabang_bws = $row->kc_kcp;
        return "<span style=\"width:100%;text-align:left;display:block;\"><a href=" . site_url('formapp/detail_peserta/') . $kode_cabang_bws . ">" . $value . "</a></span>";
    }

    function _master_output($view, $output = null) {
        $this->load->view('standar/header_gc_ultra', $output);
        $this->load->view('standar/sidebar_ultra');
        $this->load->view('standar/top_navigation_ultra');
        $this->load->view($view, $output);
        $this->load->view('standar/footer');
    }

    /* function _column_right_align($value,$row)
      {
      return "<span style=\"width:100%;text-align:right;display:block;\">".number_format($value, 2, ",", ".")."</span>";
      } */

    /* function _column_right_align($value,$row)
      {
      return "<span style=\"width:100%;text-align:right;display:block;\">".number_format($value,2)."</span>";
      } */

    function get_kredit($value) {
        //$value=5;
        $SQL = "SELECT jenis_kredit FROM m_kredit WHERE id_kredit = '" . $value . "'";

        $query = $this->db->query($SQL);
        $resultdata = $query->result_array();
        //echo json_encode($resultdata[0]['tarif_masa_'.$masa]);
        //print_r($resultdata[0]['jenis_kredit']);
        return $resultdata[0]['jenis_kredit'];
    }

    function get_jenisKredit($value) {
        // $value=1;
        $SQL = "SELECT id_kredit FROM m_peserta WHERE id_peserta = '" . $value . "'";

        $query = $this->db->query($SQL);
        $resultdata = $query->result_array();
        //echo json_encode($resultdata[0]['tarif_masa_'.$masa]);
        //print_r($resultdata[0]['id_kredit']);
        return $resultdata[0]['id_kredit'];
    }

    function approve() {
        $id = $this->uri->segment('4');
        $sql = $this->db->query("SELECT nomor_jurnal FROM m_peserta WHERE id_peserta ='" . $id . "'");
        $result = $sql->result_array();

        if ($result[0]['nomor_jurnal'] > 0) {
            $user = $this->ion_auth->user()->row();
            $approved_by = $user->id;
            $approved_date = date("Y-m-d H:i:s");
            //`id_kelompok``appoved_by``approved_date``id_status`
            $data = array(
                'id_payment' => 2 //2: Di trigger oleh approval manual
            );
            $this->db->where('id_peserta', $id);
            $this->db->update('m_peserta', $data);

            $id_kredit = $this->switch_obj($this->uri->segment('3'));
            if ($id_kredit == '1') {
                redirect('/formapp/approve_ajk', 'refresh');
            }
        } else {
            $id_kredit = $this->switch_obj($this->uri->segment('3'));
            if ($id_kredit == '1') {
                redirect('approve_peserta/index/ajk/edit/' . $id, 'refresh');
            }
        }
    }

    function reactive() {
        $id = $this->uri->segment('4');
        $user = $this->ion_auth->user()->row();
        $reactive = $this->db->query("INSERT INTO m_peserta SELECT * FROM m_pending WHERE id_peserta ='" . $id . "'");
        $this->db->query("UPDATE m_peserta SET id_status_transaksi = '1' WHERE id_peserta ='" . $id . "'");
        $delete = $this->db->query("DELETE FROM m_pending WHERE id_peserta = '" . $id . "'");

        if ($reactive == true && $delete == true) {
            $id_kredit = $this->switch_obj($this->uri->segment('3'));
            if ($id_kredit == '1') {
                redirect('/formapp/list_griya', 'refresh');
            } elseif ($id_kredit == '2') {
                redirect('/formapp/list_fm', 'refresh');
            } elseif ($id_kredit == '3') {
                redirect('/formapp/list_fp', 'refresh');
            } elseif ($id_kredit == '4') {
                redirect('/formapp/list_fpr', 'refresh');
            } elseif ($id_kredit == '5') {
                redirect('/formapp/list_fpp', 'refresh');
            }
        }
    }

    function pending() {
        $id = $this->uri->segment('4');
        $user = $this->ion_auth->user()->row();
        $pending = $this->db->query("INSERT INTO m_pending (
            nomor_polis,nama_peserta,tmp_lahir,tgl_lahir,id_kredit,jenis_kelamin,tgl_mulai,masa_asuransi,grace_priode,nilai_pertanggungan,usia_masuk,tgl_akhir,usia_jatuhtempo,tarif_premi,premi,nomor_PK,approved_by,approved_date,tgl_bayar,nomor_jurnal,id_status_transaksi,nomor_rekening,created_by,created_date
        )
        SELECT nomor_polis,nama_peserta,tmp_lahir,tgl_lahir,id_kredit,jenis_kelamin,tgl_mulai,masa_asuransi,grace_priode,nilai_pertanggungan,usia_masuk,tgl_akhir,usia_jatuhtempo,tarif_premi,premi,nomor_PK,approved_by,approved_date,tgl_bayar,nomor_jurnal,'4' AS id_status_transaksi,nomor_rekening,created_by,created_date
        FROM m_peserta WHERE id_peserta ='" . $id . "'");
        $delete = $this->db->query("DELETE FROM m_peserta WHERE id_peserta = '" . $id . "'");

        if ($pending == true && $delete == true) {
            $id_kredit = $this->switch_obj($this->uri->segment('3'));
            if ($id_kredit == '1') {
                redirect('/formapp/pending_griya', 'refresh');
            } elseif ($id_kredit == '2') {
                redirect('/formapp/pending_fm', 'refresh');
            } elseif ($id_kredit == '3') {
                redirect('/formapp/pending_fp', 'refresh');
            } elseif ($id_kredit == '4') {
                redirect('/formapp/pending_fpr', 'refresh');
            } elseif ($id_kredit == '5') {
                redirect('/formapp/pending_fpp', 'refresh');
            }
        }
    }

    function switch_obj($value) {
        switch ($value) {
            case 'ajk':
                $id = '1';
                break;
        }
        return $id;
    }

    function switch_control($value) {
        switch ($value) {
            case 'list_ajk':
                $view = "formapp_ultra";
                break;

            case 'approve_ajk':
                $view = 'daftarpolis';
                break;
        }
        return $view;
    }

}
