<?php

namespace Drupal\adf_social_field\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;


/**
 * Class SocialShareFieldSettingsForm.
 *
 * @package Drupal\adf_social_field\Form
 */
class AdfSocialFieldSettingsForm extends ConfigFormBase
{

    /**
     * {@inheritdoc}
     */
    protected function getEditableConfigNames()
    {
        return [
            'adf_social_field.global_settings',
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFormId()
    {
        return 'adf_social_field_settings_form';
    }

    /**
     * {@inheritdoc}
     */
    private $redesSociales = [
        'instagram' => 'Instagram',
        'twitter' => 'Twitter',
        'facebook' => 'Facebook',
        'pinterest' => 'Pinterest',
        'youtube' => 'Youtube',
        'google' => 'Google+'
    ];


    /**
     * {@inheritdoc}
     */

    public function buildForm(array $form, FormStateInterface $form_state)
    {
        $form['#tree'] = TRUE;

        $config = $this->config('adf_social_field.global_settings');

        $form['allowed'] = [
            '#type' => 'fieldgroup',
            '#title' => $this->t('Listado de Beneficios'),
        ];


        foreach ($this->redesSociales as $key => $value) {


            $form['allowed'][$key] = [
                '#type' => 'checkbox',
                '#title' => $this->t($value),
                '#description' => $this->t('Permite compartir en @redSocial', ['@redSocial' => $value]),
                '#default_value' => $config->get('allowed')[$key],
            ];

        }
        $form['email'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Email'),
            '#default_value' => $config->get('email'),
        ];
        return parent::buildForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        parent::validateForm($form, $form_state);
    }

    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state)
    {
        parent::submitForm($form, $form_state);


        $key = 'allowed';

        $default_config = $this->config('adf_social_field.global_settings');
        $default_config->set($key, $form_state->getValue($key));
        $default_config->set('email', $form_state->getValue('email'));
        $default_config->save();
    
  }

}
