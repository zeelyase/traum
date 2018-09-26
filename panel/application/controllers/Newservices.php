<?php

class newservices extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "newservices_v";

        $this->load->model("newservices_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->newservices_model->get();

        if($item)
            $viewData->subViewFolder = "update";
        else
            $viewData->subViewFolder = "no_content";

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }

    public function new_form(){

        $viewData = new stdClass();

        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }

    public function save(){


        $this->load->library("form_validation");

        // Kurallar yazilir..

        if($_FILES["logo"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Masaüstü Logo için lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("newservices/new_form"));

            die();
        }

        if($_FILES["mobile_logo"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Mobil Logo için lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("newservices/new_form"));

            die();
        }

        if($_FILES["favicon"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Favicon için lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("newservices/new_form"));

            die();
        }

        $this->form_validation->set_rules("company_name", "Şirket Adı", "required|trim");
        $this->form_validation->set_rules("phone_1", "Telefon 1", "required|trim");
        $this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

        $this->form_validation->set_message(
            array(
                "required"     => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){

            // Upload Süreci...

            $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);

            $image_150x35 = upload_picture($_FILES["logo"]["tmp_name"], "uploads/$this->viewFolder",150,35, $file_name);
            $image_300x70 = upload_picture($_FILES["mobile_logo"]["tmp_name"], "uploads/$this->viewFolder",300,70, $file_name);
            $image_32x32  = upload_picture($_FILES["favicon"]["tmp_name"], "uploads/$this->viewFolder",32,32, $file_name);

            if($image_150x35 && $image_300x70 && $image_32x32){

                $insert = $this->newservices_model->add(
                    array(
                        "company_name"  => $this->input->post("company_name"),
                        "phone_1"       => $this->input->post("phone_1"),
                        "phone_2"       => $this->input->post("phone_2"),
                        "fax_1"         => $this->input->post("fax_1"),
                        "fax_2"         => $this->input->post("fax_2"),
                        "address"       => $this->input->post("address"),
                        "about_us"      => $this->input->post("about_us"),
                        "mission"       => $this->input->post("mission"),
                        "vision"        => $this->input->post("vision"),
                        "email"         => $this->input->post("email"),
                        "facebook"      => $this->input->post("facebook"),
                        "twitter"       => $this->input->post("twitter"),
                        "instagram"     => $this->input->post("instagram"),
                        "linkedin"      => $this->input->post("linkedin"),
                        "logo"          => $file_name,
                        "mobile_logo"   => $file_name,
                        "favicon"       => $file_name,
                        "createdAt"     => date("Y-m-d H:i:s")
                    )
                );

                // TODO Alert sistemi eklenecek...
                if($insert){

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Kayıt başarılı bir şekilde eklendi",
                        "type"  => "success"
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                        "type"  => "error"
                    );
                }

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenirken bir problem oluştu",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("newservices/new_form"));

                die();

            }

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("newservices"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->form_error = true;

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

    public function update_form($id){

        $viewData = new stdClass();

        /** Tablodan Verilerin Getirilmesi.. */
        $item = $this->newservices_model->get(
            array(
                "id"    => $id,
            )
        );
        
        /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->item = $item;

        $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){

        $this->load->library("form_validation");

        // Kurallar yazilir..

        $this->form_validation->set_rules("description", "Açıklama Alanı", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır",
            )
        );

        // Form Validation Calistirilir..
        $validate = $this->form_validation->run();

        if($validate){


            $data = array(
                "description"           => $this->input->post("description"),
                "first_service"         => $this->input->post("first_service"),
                "second_service"        => $this->input->post("second_service"),
                "third_service"         => $this->input->post("third_service"),
                "fourth_service"        => $this->input->post("fourth_service"),
                "updatedAt"             => date("Y-m-d H:i:s")
            );
            // Masaüstü Logosu için Upload Süreci...
//            echo $_FILES["first_service_picture"]["name"]." 1. hizmet<br>";
//            echo $_FILES["second_service_picture"]["name"]." 2. hizmet<br>";
//            echo $_FILES["third_service_picture"]["name"]." 3. hizmet <br>";
//            echo $_FILES["fourth_service_picture"]["name"]." 4. hizmet<br>";
//            die();
            if($_FILES["first_service_picture"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("first_service")) . "." . pathinfo($_FILES["first_service_picture"]["name"], PATHINFO_EXTENSION);

                $image_1240x800 = upload_picture($_FILES["first_service_picture"]["tmp_name"], "uploads/$this->viewFolder",1240,800, $file_name);

                if($image_1240x800){

                    $data["first_service_picture"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "1. Hizmetlerimiz görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("newservices/update_form/$id"));

                    die();

                }

            }
elseif($_FILES["second_service_picture"]["name"] !== "") {

    $file_name = convertToSEO($this->input->post("second_service")) . "." . pathinfo($_FILES["second_service_picture"]["name"], PATHINFO_EXTENSION);

    $image_1240x800 = upload_picture($_FILES["second_service_picture"]["tmp_name"], "uploads/$this->viewFolder",1240,800, $file_name);

    if($image_1240x800){

        $data["second_service_picture"] = $file_name;

    } else {

        $alert = array(
            "title" => "İşlem Başarısız",
            "text"  => "2. Hizmetlerimiz görseli yüklenirken bir problem oluştu",
            "type"  => "error"
        );

        $this->session->set_flashdata("alert", $alert);

        redirect(base_url("newservices/update_form/$id"));

        die();

    }

} elseif($_FILES["third_service_picture"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("third_service")) . "." . pathinfo($_FILES["third_service_picture"]["name"], PATHINFO_EXTENSION);

                $image_1240x800 = upload_picture($_FILES["third_service_picture"]["tmp_name"], "uploads/$this->viewFolder",1240,800, $file_name);

                if($image_1240x800){

                    $data["third_service_picture"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "3. Hizmetlerimiz görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("newservices/update_form/$id"));

                    die();

                }

            } elseif($_FILES["fourth_service_picture"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("fourth_service")) . "." . pathinfo($_FILES["fourth_service_picture"]["name"], PATHINFO_EXTENSION);

                $image_1240x800 = upload_picture($_FILES["fourth_service_picture"]["tmp_name"], "uploads/$this->viewFolder",1240,800, $file_name);

                if($image_1240x800){

                    $data["fourth_service_picture"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "4. Hizmetlerimiz görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("newservices/update_form/$id"));

                    die();

                }

            }



            $update = $this->newservices_model->update(array("id" => $id), $data);

            // TODO Alert sistemi eklenecek...
            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }


            // Session Update İşlemi

            $newservices = $this->newservices_model->get();
            $this->session->set_userdata("newservices", $newservices);

            // İşlemin Sonucunu Session'a yazma işlemi...
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("newservices"));

        } else {

            $viewData = new stdClass();

            /** View'e gönderilecek Değişkenlerin Set Edilmesi.. */
            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;

            /** Tablodan Verilerin Getirilmesi.. */
            $viewData->item = $this->newservices_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }


}
