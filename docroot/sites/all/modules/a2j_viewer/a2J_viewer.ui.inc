<?php
/**
 * Created by PhpStorm.
 * User: gdaniels
 * Date: 1/8/19
 * Time: 8:44 AM
 */

function a2j_viewer_admin_form($form, &$form_state) {
  $form['heading'] = array (
    '#type' => 'markup',
    '#markup' => t('<h2>This module supports integrating A2J viewer in 2 ways: as a standalone content type OR as a field on any content type</h2>'),
  );
  $form['content_type'] = array (
    '#title' => t('If you are using a content type, enter it here'),
    '#type' => 'textfield',
    '#description' => 'You must use the machine name of the content type',
    '#required' => FALSE,
    '#default_value' => variable_get('a2j_viewer_content_type'),
  );
  $form['field_name'] = array (
    '#title' => t('What field are you using to upload A2J interviews?'),
    '#type' => 'textfield',
    '#description' => 'Enter the machine name of the field',
    '#required' => TRUE,
    '#default_value' => variable_get('a2j_viewer_field_name'),
  );
  $form['directory'] = array (
    '#title' => t('Where should we store the A2J zip files'),
    '#type' => 'textfield',
    '#required' => TRUE,
    '#default_value'=> variable_get('a2j_viewer_file_directory'),
  );


  $form['actions']['submit'] = array (
    '#type' => 'submit',
    '#value' => t('Save'),
    '#submit' => array('a2j_viewer_admin_submit'),
  );
  dpm($form);
  return $form;
}

function a2j_viewer_admin_submit($form, &$form_state) {

  variable_set('a2j_viewer_content_type', $form_state['values']['content_type']);
  variable_set('a2j_viewer_field_name', $form_state['values']['field_name']);
  variable_set('a2j_viewer_file_directory', $form_state['values']['directory']);
}