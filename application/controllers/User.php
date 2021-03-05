<?php

class User extends CI_Controller
{
  public function profile($id=null)
  {
    echo $id;
  }

  public function detail()
{
  $date = [
    'name' => '山田太郎',
    'pref' => '東京都'
  ];
$this->load->view('tutorial/user_detail',$date);
}

public function url()
{
  $this->load->helper('url');
  echo auto_link('googleのurlは、https://google.comです');
  echo '<br>';
  echo site_url();
}

public function agent()
{
  $this->load->library('user_agent');
  echo $this->agent->agent_string();
}

}
