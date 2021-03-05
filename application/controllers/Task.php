<?php

class Task extends CI_Controller
{
  public function index()
  {
    $this->load->helper('interval');

    if ($this->input->post()) {
      $this->form_validation->set_rules('task', 'タスク', 'required|min_length[5]|max_length[20]');

      if ($this->form_validation->run() == TRUE) {
        $this->task_model->create($this->input->post('task'));
        $date['create'] = true;
      } else {
        $date['create'] = false;
      }
    }

    $date['task_list'] = $this->task_model->lists();
    $this->load->view('tutorial/task', $date);
  }
}
