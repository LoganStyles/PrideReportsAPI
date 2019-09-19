<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Service extends REST_Controller {

    function __construct() {
        parent::__construct();
        // Configure limits on our controller methods
        // Ensure you have created the 'limits' table and enabled 'limits' within application/config/rest.php
        $this->methods['users_get']['limit'] = 500; // 500 requests per hour per user/key        
        $this->methods['users_post']['limit'] = 100; // 100 requests per hour per user/key
        $this->methods['users_delete']['limit'] = 50; // 50 requests per hour per user/key
        $this->methods['sale_post']['limit'] = 500; // 500 requests per hour per user/key
    }

    
    //reports
    public function arrivals_get() {
        $type = "arrivals";
        $from = $this->get('from');//strings
        $to = $this->get('to');

        // print_r($this->get());
        // echo 'type '.$type;exit;

        // $from="2018-09-01";
        // $to="2019-09-12";
        // $type="arrivals";

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function departures_get() {
        $type = "departures";
        $from = $this->get('from');//strings
        $to = $this->get('to');

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function stayingguests_get() {
        $type = "staying guests";
        $from = $this->get('from');
        $to = $this->get('to');

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function salessummary_get() {
        $type = "sales summary";
        $from = $this->get('from');
        $to = $this->get('to');

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function salesfnbsummary_get() {
        $type = "sales_fnb_summary";
        $from = $this->get('from');
        $to = $this->get('to');

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function cashiersummary_get() {
        $type = "cashier summary";
        $from = $this->get('from');
        $to = $this->get('to');

        if (empty($type)) {
            // Invalid room_number/reservation_id, set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->resv_model->getReportsApi($type, $from,$to);
            // Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }


    //POSTS
    public function reservationitemsinsert_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->LocalUpdater_model->insert("reservationitems","reservation_id",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function reservationitemsupdate_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->LocalUpdater_model->update("reservationitems","reservation_id",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function reservationpriceitemsinsert_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $results = $this->LocalUpdater_model->insert("reservationpriceitems","reservation_id",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK);
        }
    }

    public function reservationpriceitemsupdate_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->LocalUpdater_model->update("reservationpriceitems","reservation_id",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function reservationfolioitemsinsert_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $results = $this->LocalUpdater_model->insert("reservationfolioitems","ID",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK);
        }
    }

    public function reservationfolioitemsupdate_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            $results = $this->LocalUpdater_model->update("reservationfolioitems","ID",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }

    public function roomitemsinsert_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST);
        } else {
            // 
            $results = $this->LocalUpdater_model->insert("roomitems","title",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK);
        }
    }

    public function roomitemsupdate_post() {        
        if (empty($this->post())) {
            // Invalid set the response and exit.
            $this->response(NULL, REST_Controller::HTTP_BAD_REQUEST); // BAD_REQUEST (400) being the HTTP response code
        } else {
            
            $results = $this->LocalUpdater_model->update("roomitems","title",$this->post());
            //Set the response and exit
            $this->response($results, REST_Controller::HTTP_OK); // OK (200) being the HTTP response code
        }
    }
    

}
