<?php


namespace OpencartApi;


use GuzzleHttp\Client;
use OpencartApi\Http\ApiResponse;

/**
 * Class OpencartApi
 * @package OpencartApi
 * @method  getAccountModule()
 */
class ModelInvoker
{
    /**
     * @var Client
     */
    protected $client;

    /**
     * ModelInvoker constructor.
     * @param $client
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Opencart sistemindeki modelleri Catalog ve Admin taraf için ayrı ayrı listeler.
     *
     * @return ApiResponse
     */
    public function getMap()
    {
        $response = $this->client->get('invoker');
        return new ApiResponse($response);
    }

    /**
     * Catalog tarafı modelleri
     *
     * @return ApiResponse
     */
    public function getModels()
    {
        $response = $this->client->get('invoker/models');
        return new ApiResponse($response);
    }

    /**
     * Admin tarafı modelleri
     *
     * @return ApiResponse
     */
    public function getAdminModels()
    {
        $response = $this->client->get('invoker/adminmodels');
        return new ApiResponse($response);
    }

    /**
     * Belirli bir modelin metotlarını listeler
     *
     * @param string $modelName Örnek: catalog/product
     * @param bool $isAdmin Admin tarafdaki model mi?
     * @return ApiResponse
     */
    public function getMethods($modelName, $isAdmin = false)
    {
        $response = $this->client->post('invoker/methods', [
            'form_params' => [
                'model' => $modelName,
                'isAdmin' => $isAdmin
            ]
        ]);
        return new ApiResponse($response);
    }

    /**
     * Modeldeki metodu tetikle/çalıştır
     *
     * @param string $modelName Örnek: catalog/product
     * @param string $method Örnek: getProducts
     * @param array $args Örnek: ['data' => [['filter_name' => 'HP']]]
     * @param bool $isAdmin
     * @return ApiResponse
     */
    public function invoke($modelName, $method, $args = [], $isAdmin = false)
    {
        $response = $this->client->post('invoker/invoke', [
            'form_params' => [
                'model' => $modelName,
                'method' => $method,
                'args' => $args ? $args : '',
                'isAdmin' => $isAdmin
            ]
        ]);
        return new ApiResponse($response);
    }

    /**
     * config/autoload/models.generated.php dosyasındaki kodları oluşturur
     *
     * @return string
     */
    public function generateAllModelCodes()
    {
        $response = $this->client->get('invoker/generateAllModelsCode');
        return $response->getBody()->getContents();
    }

}