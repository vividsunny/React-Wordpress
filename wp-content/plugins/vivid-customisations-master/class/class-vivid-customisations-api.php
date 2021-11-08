<?php
class Vivid_Customisations_Controller extends WP_REST_Controller
{

    public function get_latest_posts_by_category_id()
    {

        $namespace = 'vivid_rest_api/v1';
        $path      = 'latest-posts/(?P<category_id>\d+)';

        register_rest_route($namespace, '/' . $path, [
            array(
                'methods'             => 'GET',
                'callback'            => array($this, 'get_latest_posts_by_category_id_callback'),
                'permission_callback' => array($this, 'get_items_permissions_check'),
            ),

        ]);
    }

    public function get_latest_posts()
    {

        $namespace = 'vivid_rest_api/v1';
        $path      = 'all-posts';

        register_rest_route($namespace, '/' . $path, [
            array(
                'methods'             => 'GET',
                'callback'            => array($this, 'get_latest_posts_callback'),
                'permission_callback' => array($this, 'get_items_permissions_check'),
            ),

        ]);
    }

    public function get_items_permissions_check($request)
    {
        return true;
    }

    public function get_latest_posts_by_category_id_callback($request)
    {

        $args = array(
            'category' => $request['category_id'],
        );

        $posts = get_posts($args);

        if (empty($posts)) {

            return new WP_Error('empty_category', 'there is no post in this category', array('status' => 404));
        }
        return new WP_REST_Response($posts, 200);
    }

    public function get_latest_posts_callback($request)
    {
    	
    	$args = array(
			'numberposts' => -1,
			'post_status' => 'publish',
			'post_type' => 'post',
		);

        $posts = get_posts($args);

        // echo '<pre>';print_r( $posts );echo '</pre>';exit;
        if (empty($posts)) {

            return new WP_Error('empty_category', 'there is no post in this category', array('status' => 404));
        }
        return new WP_REST_Response($posts, 200);
    }

    public function get_hero_banner()
    {

        $namespace = 'vivid_rest_api/v1';
        $path      = 'hero_banner';

        register_rest_route($namespace, '/' . $path, [
            array(
                'methods'             => 'GET',
                'callback'            => array($this, 'get_hero_banner_callback'),
            ),

        ]);
    }

    public function get_hero_banner_callback( $request )
    {

        $hero_section       = get_field('hero_section', 'option');
        $hero_section_arr   = array();

        foreach ($hero_section as $key => $value) {
            
            $banner                         = $value['hero_banner'];
            // $hero_section_arr['banner']     = $banner['url'];
            // $hero_section_arr['title']      = $value['hero_banner_title'];
            // $hero_section_arr['subtitle']   = $value['hero_banner_subtitle'];
            $hero_arry = array(
                'banner'    => $banner['url'],
                'title'     => $value['hero_banner_title'],
                'subtitle'  => $value['hero_banner_subtitle'],
            );

            array_push( $hero_section_arr, $hero_arry );

        }

        if (empty($hero_section_arr)) {

            return new WP_Error(
                'empty_hero_banner', 
                'there is no data in hero banner', 
                array(
                    'status' => 404
                )
            );
            
        }

        return new WP_REST_Response($hero_section_arr, 200);
    }

}
add_action('rest_api_init', function () {          
    $api = new Vivid_Customisations_Controller();
    $api->get_latest_posts_by_category_id();
    $api->get_latest_posts();
    $api->get_hero_banner();
});