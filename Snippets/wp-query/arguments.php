\$args = array(
	/**
	 * Author Parameters
	 *
	 * Show posts associated with certain author.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Author_Parameters
	 *
	 * author         : (int)    - use author id.
	 * author_name    : (string) - use 'user_nicename' (NOT name).
	 * author__in     : (array)  - use author id (available with Version 3.7).
	 * author__not_in : (array)  - use author id (available with Version 3.7).
	 */
	'author'                 => 1,
	'author_name'            => 'user_nicename',
	'author__in'             => array( 1, 2, 3 ),
	'author__not_in'         => array( 1, 2, 3 ),
	/**
	 * Category Parameters
	 *
	 * Show posts associated with certain categories.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Category_Parameters
	 *
	 * cat              : (int)    - use category id.
	 * category_name    : (string) - use category slug (NOT name).
	 * category__and    : (array)  - use category id.
	 * category__in     : (array)  - use category id.
	 * category__not_in : (array)  - use category id.
	 */
	'cat'                    => 1,
	'category_name'          => 'category_slug',
	'category__and'          => array( 1, 2, 3 ),
	'category__in'           => array( 1, 2, 3 ),
	'category__not_in'       => array( 1, 2, 3 ),
	/**
	 * Tag Parameters
	 *
	 * Show posts associated with certain tags.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Tag_Parameters
	 *
	 * tag           : (string) - use tag slug.
	 * tag_id        : (int)    - use tag id.
	 * tag__and      : (array)  - use tag ids.
	 * tag__in       : (array)  - use tag ids.
	 * tag__not_in   : (array)  - use tag ids.
	 * tag_slug__and : (array)  - use tag slugs.
	 * tag_slug__in  : (array)  - use tag slugs.
	 */
	'tag'                    => 'tag_slug',
	'tag_id'                 => 1,
	'tag__and'               => array( 1, 2, 3 ),
	'tag__in'                => array( 1, 2, 3 ),
	'tag__not_in'            => array( 1, 2, 3 ),
	'tag_slug__and'          => array( 'tag_slug_one', 'tag_slug_two', 'tag_slug_three' ),
	'tag_slug__in'           => array( 'tag_slug_one', 'tag_slug_two', 'tag_slug_three' ),
	/**
	 * Taxonomy Parameters
	 *
	 * Show posts associated with certain taxonomy.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Taxonomy_Parameters
	 *
	 * tax_query        : (array)            - use taxonomy parameters (available with Version 3.1).
	 * relation         : (string)           - The logical relationship between each inner taxonomy array when there is more than one.
	 *                                         Possible values are 'AND', 'OR'. Do not use with a single inner taxonomy array.
	 * taxonomy         : (string)           - Taxonomy.
	 * field            : (string)           - Select taxonomy term by ('term_id'(default), 'name' or 'slug')
	 * terms            : (int/string/array) - Taxonomy term(s).
	 * include_children : (boolean)          - Whether or not to include children for hierarchical taxonomies. Defaults to true.
	 * operator         : (string)           - Operator to test. Possible values are 'IN'(default), 'NOT IN', 'AND'.
	 */
	'tax_query'              => array(
		'relation' => 'AND',
		array(
			'taxonomy'         => 'taxonomy',
			'field'            => 'term_id',
			'terms'            => 1,
			'include_children' => true,
			'operator'         => 'IN',
		),
	),
	/**
	 * Search Parameter
	 *
	 * Show posts based on a keyword search.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Search_Parameter
	 *
	 * s : (string) - Search keyword.
	 */
	's'                      => 'keyword',
	/**
	 * Post & Page Parameters
	 *
	 * Display content based on post and page parameters. Remember that default post_type is only set to display posts but not pages.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Post_.26_Page_Parameters
	 *
	 * p                   : (int)    - use post id.
	 * name                : (string) - use post slug.
	 * page_id             : (int)    - use page id.
	 * pagename            : (string) - use page slug.
	 * post_parent         : (int)    - use page id to return only child pages. Set to 0 to return only top-level entries.
	 * post_parent__in     : (array)  - use post ids. Specify posts whose parent is in an array.
	 *                                  NOTE: Introduced in 3.6 http://core.trac.wordpress.org/ticket/11056
	 * post_parent__not_in : (array)  - use post ids. Specify posts whose parent is not in an array.
	 * post__in            : (array)  - use post ids. Specify posts to retrieve.
	 *                                  ATTENTION: If you use sticky posts, they will be included (prepended!) in the posts you retrieve whether you want it or not.
	 *                                  To suppress this behaviour use ignore_sticky_posts.
	 * post__not_in        : (array)  - use post ids. Specify post NOT to retrieve.
	 */
	'p'                      => 1,
	'name'                   => 'post_slug',
	'page_id'                => 1,
	'pagename'               => 'page_slug',
	'post_parent'            => 0,
	'post_parent__in'        => array( 1, 2, 3 ),
	'post_parent__not_in'    => array( 1, 2, 3 ),
	'post__in'               => array( 1, 2, 3 ),
	'post__not_in'           => array( 1, 2, 3 ),
	/**
	 * Password Parameters
	 *
	 * Show content based on post and page parameters. Remember that default post_type is only set to display posts but not pages.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Password_Parameters
	 *
	 * has_password  : (bool)   - true  : posts with passwords
	 *                            false : posts without passwords
	 *                            null  : all posts with and without passwords (available with Version 3.9).
	 * post_password : (string) - show posts with a particular password (available with Version 3.9)
	 */
	'has_password'           => true,
	'post_password'          => 'password',
	/**
	 * Type Parameters
	 *
	 * Show posts associated with certain type.
	 *
	 * @see https://codex.wordpress.org/Post_Types
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Type_Parameters
	 *
	 * post_type : (string|array) - use post types.
	 *                              Retrieves posts by Post Types, default value is 'post'.
	 *                              If 'tax_query' is set for a query, the default value becomes 'any'.
	 *
	 *                              'post'             - a post.
	 *                              'page'             - a page.
	 *                              'revision'         - a revision.
	 *                              'attachment'       - an attachment. Whilst the default WP_Query post_status is 'publish', attachments have a default post_status of 'inherit'.
	 *                                                   This means no attachments will be returned unless you also explicitly set post_status to 'inherit' or 'any'.
	 *                                                   (see https://codex.wordpress.org/Class_Reference/WP_Query#Status_Parameters)
	 *                              'nav_menu_item'    - a navigation menu item
	 *                              'any'              - retrieves any type except revisions and types with 'exclude_from_search' set to true.
	 *                              'custom_post_type' - Custom Post Types (e.g. movies)
	 */
	'post_type'              => 'post',
	/**
	 * Status Parameters
	 *
	 * Show posts associated with certain status.
	 *
	 * @see https://codex.wordpress.org/Post_Status
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Status_Parameters
	 *
	 * post_status : (string|array) - use post status.
	 *                                Retrieves posts by Post Status.
	 *                                Default value is 'publish', but if the user is logged in, 'private' is added.
	 *                                And if the query is run in an admin context (administration area or AJAX call), protected statuses are added too.
	 *                                By default protected statuses are 'future', 'draft' and 'pending'.
	 *
	 *                                'publish'    : a published post or page.
	 *                                'pending'    : post is pending review.
	 *                                'draft'      : a post in draft status.
	 *                                'auto-draft' : a newly created post, with no content.
	 *                                'future'     : a post to publish in the future.
	 *                                'private'    : not visible to users who are not logged in.
	 *                                'inherit'    : a revision. see get_children.
	 *                                'trash'      : post is in trashbin (available with Version 2.9).
	 *                                'any'        : retrieves any status except those from post statuses with 'exclude_from_search' set to true (i.e. trash and auto-draft).
	 */
	'post_status'            => 'publish',
	/**
	 * Pagination Parameters
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Pagination_Parameters
	 *
	 * nopaging               : (boolean) - show all posts or use pagination. Default value is 'false', use paging.
	 * posts_per_page         : (int)     - number of post to show per page (available with Version 2.1, replaced showposts parameter).
	 *                                      Use 'posts_per_page'=>-1 to show all posts (the 'offset' parameter is ignored with a -1 value).
	 *                                      Set the 'paged' parameter if pagination is off after using this parameter.
	 *                                      NOTE:
	 *                                        If the query is in a feed, wordpress overwrites this parameter with the stored 'posts_per_rss' option.
	 *                                        To reimpose the limit, try using the 'post_limits' filter, or filter 'pre_option_posts_per_rss' and return -1
	 * posts_per_archive_page : (int)     - number of posts to show per page - on archive pages only.
	 *                                      Over-rides posts_per_page and showposts on pages where is_archive() or is_search() would be true.
	 * offset                 : (int)     - number of post to displace or pass over.
	 *                                      WARNING:
	 *                                        Setting the offset parameter overrides/ignores the paged parameter and breaks pagination.
	 *                                        (see https://codex.wordpress.org/Making_Custom_Queries_using_Offset_and_Pagination for a workaround).
	 *                                        The 'offset' parameter is ignored when 'posts_per_page'=>-1 (show all posts) is used.
	 * paged                  : (int)     - number of page. Show the posts that would normally show up just on page X when using the "Older Entries" link.
	 * page                   : (int)     - number of page for a static front page. Show the posts that would normally show up just on page X of a Static Front Page.
	 * ignore_sticky_posts    : (boolean) - ignore post stickiness (available with Version 3.1, replaced caller_get_posts parameter).
	 *
	 *                                      false (default) : move sticky posts to the start of the set.
	 *                                      true            : do not move sticky posts to the start of the set.
	 */
	'nopaging'               => false,
	'posts_per_page'         => 10,
	'posts_per_archive_page' => 10,
	'offset'                 => 0,
	'paged'                  => 1,
	'page'                   => 1,
	'ignore_sticky_post'     => false,
	/**
	 * Order & Orderby Parameters
	 *
	 * Sort retrieved posts.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Order_.26_Orderby_Parameters
	 *
	 * order   : (string|array) - Designates the ascending or descending order of the 'orderby' parameter.
	 *                            Defaults to 'DESC'. An array can be used for multiple order/orderby sets.
	 *
	 *                            'ASC'  : ascending order from lowest to highest values (1, 2, 3; a, b, c).
	 *                            'DESC' : descending order from highest to lowest values (3, 2, 1; c, b, a).
	 *
	 * orderby : (string|array) - Sort retrieved posts by parameter.
	 *                            Defaults to 'date (post_date)'. One or more options can be passed.
	 *
	 *                            'none'           : No order (available with Version 2.8).
	 *                            'ID'             : Order by post id. Note the capitalization.
	 *                            'author'         : Order by author.
	 *                            'title'          : Order by title.
	 *                            'name'           : Order by post name (post slug).
	 *                            'type'           : Order by post type (available since Version 4.0).
	 *                            'date'           : Order by date.
	 *                            'modified'       : Order by last modified date.
	 *                            'parent'         : Order by post/page parent id.
	 *                            'rand'           : Random order.
	 *                            'comment_count'  : Order by number of comments (available with Version 2.9).
	 *                            'menu_order'     : Order by Page Order.
	 *                                               Used most often for Pages (Order field in the Edit Page Attributes box)
	 *                                               and for Attachments (the integer fields in the Insert/Upload Media Gallery dialog),
	 *                                               but could be used for any post type with distinct 'menu_order' values (they all default to 0).
	 *                            'meta_value'     : Note that a 'meta_key=keyname' must also be present in the query.
	 *                                               Note also that the sorting will be alphabetical which is fine for strings (i.e. words),
	 *                                               but can be unexpected for numbers (e.g. 1, 3, 34, 4, 56, 6, etc, rather than 1, 3, 4, 6, 34, 56 as you might naturally expect).
	 *                                               Use 'meta_value_num' instead for numeric values.
	 *                                               You may also specify 'meta_type' if you want to cast the meta value as a specific type.
	 *                                               Possible values 'NUMERIC', 'BINARY', 'CHAR', 'DATE', 'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', 'UNSIGNED', same as in '\$meta_query'.
	 *                            'meta_value_num' : Order by numeric meta value (available with Version 2.8).
	 *                                               Also note that a 'meta_key=keyname' must also be present in the query.
	 *                                               This value allows for numerical sorting as noted above in 'meta_value'.
	 *                            'post__in'       : Preserve post ID order given in the post__in array (available with Version 3.5).
	 */
	'order'                  => 'DESC',
	'orderby'                => 'date',
	/**
	 * Date Parameters
	 *
	 * Show posts associated with a certain time and date period.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Date_Parameters
	 *
	 * year       : (int)   - 4 digit year (e.g. 2011).
	 * monthnum   : (int)   - Month number (from 1 to 12).
	 * w          : (int)   - Week of the year (from 0 to 53).
	 *                        Uses MySQL WEEK command.
	 *                        The mode is dependent on the "start_of_week" option.
	 * day        : (int)   - Day of the month (from 1 to 31).
	 * hour       : (int)   - Hour (from 0 to 23).
	 * minute     : (int)   - Minute (from 0 to 60).
	 * second     : (int)   - Second (0 to 60).
	 * m          : (int)   - YearMonth (For e.g.: 201307).
	 *
	 * date_query : (array) - Date parameters (available with Version 3.7).
	 *    year      : (int)          - 4 digit year (e.g. 2011).
	 *    month     : (int)          - Month number (from 1 to 12).
	 *    week      : (int)          - Week of the year (from 0 to 53).
	 *    day       : (int)          - Day of the month (from 1 to 31).
	 *    hour      : (int)          - Hour (from 0 to 23).
	 *    minute    : (int)          - Minute (from 0 to 59).
	 *    second    : (int)          - Second (0 to 59).
	 *    after     : (string/array) - Date to retrieve posts after.
	 *                                 Accepts strtotime() - compatible string, or array of 'year', 'month', 'day' values:
	 *
	 *                                 year  : (string) - Accepts any four-digit year. Default is empty.
	 *                                 month : (string) - The month of the year. Accepts numbers 1-12. Default: 12.
	 *                                 day   : (string) - The day of the month. Accepts numbers 1-31. Default: last day of month.
	 *    before    : (string/array) - Date to retrieve posts before.
	 *                                 Accepts strtotime()-compatible string, or array of 'year', 'month', 'day' values:
	 *
	 *                                 year  : (string) - Accepts any four-digit year. Default is empty.
	 *                                 month : (string) - The month of the year. Accepts numbers 1-12. Default: 1.
	 *                                 day   : (string) - The day of the month. Accepts numbers 1-31. Default: 1.
	 *    inclusive : (boolean)      - For after/before, whether exact value should be matched or not'.
	 *    compare   : (string)       - See WP_Date_Query::get_compare().
	 *    column    : (string)       - Column to query against. Default: 'post_date'.
	 *    relation  : (string)       - OR or AND, how the sub-arrays should be compared. Default: AND.
	 */
	'year'                   => 2011,
	'monthnum'               => 12,
	'w'                      => 53,
	'day'                    => 31,
	'hour'                   => 23,
	'minute'                 => 60,
	'second'                 => 60,
	'm'                      => 201307,
	'date_query'             => array(
		array(
			'year'     => 2011,
			'monthnum' => 12,
			'w'        => 53,
			'day'      => 31,
			'hour'     => 23,
			'minute'   => 60,
			'second'   => 60,
			'after'    => 'date',
			'before'   => 'date',
		),
		'inclusive' => true,
		'compare'   => '=',
		'column'    => 'post_date',
		'relation'  => 'AND',
	),
	/**
	 * Custom Field Parameters
	 *
	 * Show posts associated with a certain custom field.
	 *
	 * This part of the query is parsed by WP_Meta_Query.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Meta_Query
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Custom_Field_Parameters
	 *
	 * meta_key       : (string)       - Custom field key. ( You must sanitize this yourself )
	 * meta_value     : (string|array) - Custom field value. ( You must sanitize this yourself )
	 * meta_value_num : (number)       - Custom field value.
	 * meta_type      : (number)       - Custom field type (see type below for options).
	 * meta_compare   : (string)       - Operator to test the 'meta_value'. Default value is '='.
	 *                                   Possible values:
	 *                                     '=', '!=', '>', '>=', '<', '<='
	 *                                     'LIKE', 'NOT LIKE'
	 *                                     'IN', 'NOT IN'
	 *                                     'BETWEEN', 'NOT BETWEEN'
	 *                                     'NOT EXISTS'
	 *                                     'REGEXP', 'NOT REGEXP'
	 *                                     'RLIKE'
	 *
	 * meta_query     : (array)        - Custom field parameters (available with Version 3.1).
	 *         key     : (string)       - Custom field key.
	 *         value   : (string|array) - Custom field value.
	 *                                    It can be an array only when compare is 'IN', 'NOT IN', 'BETWEEN', or 'NOT BETWEEN'.
	 *                                    You don't have to specify a value when using the 'EXISTS' or 'NOT EXISTS' comparisons in WordPress 3.9 and up.
	 *                                    NOTE:
	 *                                    Due to bug http://core.trac.wordpress.org/ticket/23268,
	 *                                    value is required for NOT EXISTS comparisons to work correctly prior to 3.9.
	 *                                    You must supply some string for the value parameter.
	 *                                    An empty string or NULL will NOT work.
	 *                                    However, any other string will do the trick and will NOT show up in your SQL when using NOT EXISTS.
	 *                                    Need inspiration? How about 'bug #23268'.
	 *         compare : (string)       - Operator to test the 'value'. Default value is '='.
	 *                                    Possible values:
	 *                                      '=', '!=', '>', '>=', '<', '<='
	 *                                      'LIKE', 'NOT LIKE'
	 *                                      'IN', 'NOT IN'
	 *                                      'BETWEEN', 'NOT BETWEEN'
	 *                                      'EXISTS', 'NOT EXISTS' (only in WP >= 3.5)
	 *
	 *         type    : (string)       - Custom field type. Default value is 'CHAR'.
	 *                                    Possible values:
	 *                                      'NUMERIC', 'BINARY', 'CHAR', 'DATE', 'DATETIME', 'DECIMAL', 'SIGNED', 'TIME', 'UNSIGNED'
	 *
	 *     relation :  (string) - The logical relationship between each inner meta_query array when there is more than one.
	 *                            Possible values are 'AND', 'OR'.
	 *                            Do not use with a single inner meta_query array.
	 */
	'meta_key'               => 'custom_field_key',
	'meta_value'             => 'custom_field_value',
	'meta_value_num'         => '1',
	'meta_compare'           => '=',
	'meta_query'             => array(
		'relation' => 'AND',
		array(
			'key'     => 'custom_field_key',
			'value'   => 'custom_field_value',
			'compare' => '=',
			'type'    => 'CHAR',
		),
	),
	/**
	 * Permission Parameters
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Permission_Parameters
	 *
	 * perm : (string) - User permission.
	 */
	'perm'                   => 'readable',
	/**
	 * Caching Parameters
	 *
	 * Stop the data retrieved from being added to the cache.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Caching_Parameters
	 *
	 * cache_results          : (boolean) - Post information cache.
	 * update_post_meta_cache : (boolean) - Post meta information cache.
	 * update_post_term_cache : (boolean) - Post term information cache.
	 */
	'cache_results'          => true,
	'update_post_meta_cache' => true,
	'update_post_term_cache' => true,
	/**
	 * Return Fields Parameter
	 *
	 * Set return values.
	 *
	 * @see https://codex.wordpress.org/Class_Reference/WP_Query#Return_Fields_Parameter
	 *
	 * fields: (string) - Which fields to return. All fields are returned by default.
	 *                    There are two other options:
	 *                      'ids'        : Return an array of post IDs.
	 *                      'id=>parent' : Return an array of stdClass objects with ID and post_parent properties.
	 *                      Passing anything else will return all fields (default) - an array of post objects.
	 */
	'fields'                 => '',
);