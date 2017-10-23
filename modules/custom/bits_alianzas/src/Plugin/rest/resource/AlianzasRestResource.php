<?php

namespace Drupal\bits_alianzas\Plugin\rest\resource;

use Drupal\bits_alianzas\Entity\BitsAlianzas;
use Drupal\Core\Session\AccountProxyInterface;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Psr\Log\LoggerInterface;

/**
 * Provides a resource to get view modes by entity and bundle.
 *
 * @RestResource(
 *   id = "alianzas_rest_resource",
 *   label = @Translation("Alianzas rest resource"),
 *   uri_paths = {
 *     "canonical" = "/alianzas"
 *   }
 * )
 */
class AlianzasRestResource extends ResourceBase {
  /**
   * A current user instance.
   *
   * @var \Drupal\Core\Session\AccountProxyInterface
   */
  protected $currentUser;

  /**
   * Constructs a Drupal\rest\Plugin\ResourceBase object.
   *
   * @param array $configuration
   *   A configuration array containing information about the plugin instance.
   * @param string $plugin_id
   *   The plugin_id for the plugin instance.
   * @param mixed $plugin_definition
   *   The plugin implementation definition.
   * @param array $serializer_formats
   *   The available serialization formats.
   * @param \Psr\Log\LoggerInterface $logger
   *   A logger instance.
   * @param \Drupal\Core\Session\AccountProxyInterface $current_user
   *   A current user instance.
   */
  public function __construct(
    array $configuration,
    $plugin_id,
    $plugin_definition,
    array $serializer_formats,
    LoggerInterface $logger,
    AccountProxyInterface $current_user) {
    parent::__construct($configuration, $plugin_id, $plugin_definition, $serializer_formats, $logger);

    $this->currentUser = $current_user;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
    return new static(
      $configuration,
      $plugin_id,
      $plugin_definition,
      $container->getParameter('serializer.formats'),
      $container->get('logger.factory')->get('bits_alianzas'),
      $container->get('current_user')
    );
  }
  /**
   * Responds to GET requests.
   *
   * Returns a list of bundles for specified entity.
   *
   * @throws \Symfony\Component\HttpKernel\Exception\HttpException
   *   Throws exception expected.
   */
  public function get() {

    // You must to implement the logic of your REST Resource here.
    // Use current user after pass authentication to validate access.
    if (!$this->currentUser->hasPermission('access content')) {
       throw new AccessDeniedHttpException();
    }
//      $query = \Drupal::entityQuery('bits_alianzas')
//          ->sort('created', 'DESC')
//          ->range(0, 5);
//          $result=$query->execute();

      $query = \Drupal::database()->select('bits_alianzas', 'alz');
      $query->fields('alz', ['titulo','url','id','created']);
      $query->addField('f', 'filename');
      $query->join('file_managed', 'f', 'f.fid = alz.logo__target_id');
      $query->orderBy('alz.created','DESC');
      $query->range(0, 5);


      $alianzas = $query->execute()->fetchAll();
//      var_dump($alianzas); die;

//        $entities=\Drupal::entityTypeManager()->getStorage('bits_alianzas')->loadMultiple($result);
      $path=\Drupal::request()->getSchemeAndHttpHost().base_path();
      $imag="sites/default/files/images/alianza_logo/";
//      var_dump($path); die;
      $alianza=[];
        foreach ($alianzas as $entity){
             $alianza[]=[
                 'id'=>$entity->id,
                 'titulo'=>$entity->titulo,
                 'link'=>$entity->url,
                 'img'=>$path.$imag.$entity->filename

             ];
  }
//      Define el tiempo en cache del json
      $account = array(
          '#cache' => array(
              'max-age' => 0,
          ),
      );
      $response = new ResourceResponse($alianza);

      $response->addCacheableDependency($account);
      return $response;
  }
}
