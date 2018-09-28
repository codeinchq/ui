<?php
//
// +---------------------------------------------------------------------+
// | CODE INC. SOURCE CODE                                               |
// +---------------------------------------------------------------------+
// | Copyright (c) 2018 - Code Inc. SAS - All Rights Reserved.           |
// | Visit https://www.codeinc.fr for more information about licensing.  |
// +---------------------------------------------------------------------+
// | NOTICE:  All information contained herein is, and remains the       |
// | property of Code Inc. SAS. The intellectual and technical concepts  |
// | contained herein are proprietary to Code Inc. SAS are protected by  |
// | trade secret or copyright law. Dissemination of this information or |
// | reproduction of this material is strictly forbidden unless prior    |
// | written permission is obtained from Code Inc. SAS.                  |
// +---------------------------------------------------------------------+
//
// Author:   Joan Fabrégat <joan@codeinc.fr>
// Date:     28/09/2018
// Project:  HtmlTemplates
//
declare(strict_types=1);
namespace CodeInc\HtmlTemplates\HtmlHeaders;

/**
 * Class HtmlHeadersException
 *
 * @package CodeInc\HtmlTemplates\HtmlHeaders
 * @author Joan Fabrégat <joan@codeinc.fr>
 */
class HtmlHeadersException extends \Exception
{
    public const CODE_NOT_A_HEADER = 1;

    /**
     * @param $item
     * @return HtmlHeadersException
     */
    public static function notAnHeader($item):self
    {
        return new self(sprintf("The list item '%s' is not a string an can not be used as an header.",
            is_object($item) ? get_class($item) : (string)$item), self::CODE_NOT_A_HEADER);
    }
}