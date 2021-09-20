<?php
/* 
 *  This is the default license template.
 *  
 *  File: Match.php
 *  Author: root
 *  Copyright (c) 2021 root
 *  
 *  To edit this license information: Press Ctrl+Shift+P and press 'Create new License Template...'.
 */

namespace Elastica\Query;

trigger_deprecation('ruflin/elastica', '7.1.0', 'The "%s" class is deprecated, use "%s" instead. "match" is a reserved keyword starting from PHP 8.0. It will be removed in 8.0.', Match::class, MatchQuery::class);

/**
 * Match query.
 *
 * This class is for backward compatibility reason. For PHP 8 and above use MatchQuery as Match is reserved.
 *
 * @author Nicolas Ruflin <spam@ruflin.com>
 *
 * @deprecated since version 7.1.0, use the MatchQuery class instead.
 */
class Match extends MatchQuery
{
}
