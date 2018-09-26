<?php

class Home extends CI_Controller{


    public $viewFolder = "";

    public function __construct(){
        parent::__construct();
        $this->viewFolder = "homepage";
    }

    public function index(){

        //Anasayfa
        $viewData = new stdClass();

        $viewData->viewFolder = "home_v";

        $this->load->model("product_model");
        $viewData->image = $this->product_model->images_join(
            array(
                "table" => "products",
                "condition" => "products.id = product_images.product_id"
            ),
            array(
                "isCover" => 1,
                "products.isActive" => 0
            ), "products.id pro_id, products.url pro_url, products.title pro_title, product_images.img_url pro_img_url", "products.rank ASC", "3"
        );

        $this->load->view($viewData->viewFolder, $viewData);

    }

    public function product_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "product_list_v";

        $this->load->model("product_model");

        $viewData->products = $this->product_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function project_details($url = ""){

        $viewData = new stdClass();
        $viewData->viewFolder = "project_details_v";

        $this->load->model("product_model");
        $this->load->model("product_image_model");

        $viewData->product = $this->product_model->get(
            array(
                "url"       => $url
            )
        );

        $viewData->product_images = $this->product_image_model->get_all(
            array(
                "isActive"      => 1,
                "product_id"    => $viewData->product->id
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function completed_projects_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "completed_projects_list_v";
        $viewData->subViewFolder = "Projeler";
        $viewData->subViewFolderTurkce = "Biten Projeler";

        $this->load->model("product_model");
        

        $viewData->completed_projects = $this->product_model->get_all(
            array(
                "isActive"  => 0
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function continuing_projects_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "continuing_projects_list_v";
        $viewData->subViewFolder = "Projeler";
        $viewData->subViewFolderTurkce = "Devam Eden Projeler";

        $this->load->model("product_model");
        

        $viewData->continuing_projects = $this->product_model->get_all(
            array(
                "isActive"  => 1
            ), "rank ASC"
        );

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function about_us_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "about_us_list_v";
        $viewData->subViewFolder = "Hakkımızda";

        $this->load->model("settings_model");
        

        $viewData->about_us = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function contacts_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "contacts_list_v";
        $viewData->subViewFolder = "İletişim";

        $this->load->model("settings_model");

        $viewData->contacts = $this->settings_model->get();

        $this->load->view($viewData->viewFolder, $viewData);
    }

    public function services_list(){

        $viewData = new stdClass();
        $viewData->viewFolder = "newservices_list_v";
        $viewData->subViewFolder = "Hizmetlerimiz";

        $this->load->model("newservices_model");

        $viewData->about_us = $this->newservices_model->get();

        $this->load->view($viewData->viewFolder, $viewData);
    }





}