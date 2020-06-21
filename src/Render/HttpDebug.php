<?php
/**
 * Debug HTTP messages
 *
 * @package PHP Markdown
 * @subpackage HttpDebug
 * @version 1.0.0
 */

 namespace Tech\Render;

class HttpDebug
{
    /**
     * @var static sring $template;
     */
    protected static string $template = '<table> <thead> <tr> <th>Request URL</th>'
    .'<th>URL Parts</th> </tr> </thead> <tbody> <tr> <td>%1$s</td> <td>%2$s</td> </tr> </tbody> </table>';
    
    /**
     * @var string $debugStr
     */
    protected string $debugStr;
    
    /**
     * @var array $debugData
     */
    protected array $debugData;
    
    public static function render(string $debugStr = null, array $debugData = [])
    {
        if (empty($debugStr) && empty($debugData)) {
            return;
        }
        $output = sprintf(self::$template, $debugStr, join(", ", $debugData));
        echo $output;
    }
}
