<?php
/**
 * Created by PhpStorm.
 * User: gdaniels
 * Date: 1/8/19
 * Time: 8:44 AM
 */

function a2j_viewer_admin_form($form, &$form_state) {

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
  $form['class'] = array (
    '#title' => t('Enter the CSS class name for the iframe to use'),
    '#type' => 'textfield',
    '#required' => TRUE,
    '#default_value' => variable_get('a2j_viewer_class'),
  );


  $form['actions']['submit'] = array (
    '#type' => 'submit',
    '#value' => t('Save'),
    '#submit' => array('a2j_viewer_admin_submit'),
  );
  return $form;
}

function a2j_viewer_admin_submit($form, &$form_state) {

  variable_set('a2j_viewer_class', $form_state['values']['class']);
  variable_set('a2j_viewer_field_name', $form_state['values']['field_name']);
  variable_set('a2j_viewer_file_directory', $form_state['values']['directory']);
}