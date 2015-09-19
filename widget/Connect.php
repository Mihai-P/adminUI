<?php
namespace yii\adminUi\widget;

use yii\base\InvalidConfigException;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii;

/**
 * Bootstrap box component.
 *
 * @see http://getbootstrap.com/javascript/#dropdowns
 * @author Mithun Mandal <mithun12000@gmail.com>
 * @since 2.0
 */
class Connect extends \dektrium\user\widgets\Connect
{
    /**
     * Renders the main content, which includes all external services links.
     */
    protected function renderMainContent()
    {
        echo Html::beginTag('div', ['class' => 'social-auth-links text-center']);
        echo Html::tag('p', '- OR -');
        foreach ($this->getClients() as $externalService) {
            $this->clientLink($externalService);
        }
        echo Html::endTag('div');
    }

    /**
     * Outputs client auth link.
     * @param ClientInterface $client external auth client instance.
     * @param string $text link text, if not set - default value will be generated.
     * @param array $htmlOptions link HTML options.
     * @throws InvalidConfigException on wrong configuration.
     */
    public function clientLink($client, $text = null, array $htmlOptions = [])
    {
        $text = '<i class="fa fa-' . $client->getName() . '"></i> Sign in using ' . $client->getTitle();
        $htmlOptions['class'] = 'btn btn-block btn-social btn-' . $client->getName() . ' btn-flat';
        parent::clientLink($client, $text, $htmlOptions);
    }
}
