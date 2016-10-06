<?php
    $this->load->view('template/LTE/v_header');
    $this->load->view('template/LTE/v_sidebar');

    $this->load->view($view);

    $this->load->view('template/LTE/v_footer');
