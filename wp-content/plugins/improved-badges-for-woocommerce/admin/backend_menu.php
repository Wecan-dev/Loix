<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('IBFW_back')) {

    class IBFW_back {

        protected static $instance;
       
        function IBFW_create_custpost() {
            $post_type = 'ibfw_product_label';
            $singular_name = 'Product Label';
            $plural_name = 'Product Labels';
            $slug = 'ibfw_product_label';
            
            $labels = array(
                'name'               => _x( $plural_name, 'post type general name', 'ocpl' ),
                'singular_name'      => _x( $singular_name, 'post type singular name', 'ocpl' ),
                'menu_name'          => _x( $singular_name, 'admin menu name', 'ocpl' ),
                'name_admin_bar'     => _x( $singular_name, 'add new name on admin bar', 'ocpl' ),
                'add_new'            => __( 'Add New', 'ocpl' ),
                'add_new_item'       => __( 'Add New '.$singular_name, 'ocpl' ),
                'new_item'           => __( 'New '.$singular_name, 'ocpl' ),
                'edit_item'          => __( 'Edit '.$singular_name, 'ocpl' ),
                'view_item'          => __( 'View '.$singular_name, 'ocpl' ),
                'all_items'          => __( 'All '.$plural_name, 'ocpl' ),
                'search_items'       => __( 'Search '.$plural_name, 'ocpl' ),
                'parent_item_colon'  => __( 'Parent '.$plural_name.':', 'ocpl' ),
                'not_found'          => __( 'No Table found.', 'ocpl' ),
                'not_found_in_trash' => __( 'No Table found in Trash.', 'ocpl' )
            );

            $args = array(
                'labels'             => $labels,
                'description'        => __( 'Description.', 'ocpl' ),
                'public'             => false,
                'publicly_queryable' => true,
                'show_ui'            => true,
                'show_in_menu'       => true,
                'query_var'          => true,
                'rewrite'            => array( 'slug' => $slug ),
                'capability_type'    => 'post',
                'has_archive'        => true,
                'hierarchical'       => false,
                'menu_position'      => null,
                'supports'           => array( 'title' ),
                'menu_icon'          => 'dashicons-awards'
            );
            register_post_type( $post_type, $args );
        }

        function IBFW_add_meta_box() {
            add_meta_box(
                'OCPL_metabox',
                __( 'Label Settings', 'ocpl' ),
                array($this, 'IBFW_metabox_cb'),
                'ibfw_product_label',
                'normal'
            );
        }

        function IBFW_metabox_cb( $post ) {
            // Add a nonce field so we can check for it later.
            wp_nonce_field( 'OCPL_meta_save', 'OCPL_meta_save_nounce' );
            ?> 
            <div class="ocpl_container">
                <ul class="ocpl_tabs">
                    <li class="tab-link current" data-tab="tab-default">
                        <?php echo __( 'Default Settings', IBFW_DOMAIN );?>
                    </li>
                    <li class="tab-link" data-tab="tab-data">
                        <?php echo __( 'Label Design', IBFW_DOMAIN );?>
                    </li>
                    <li class="tab-link" data-tab="tab-general">
                        <?php echo __( 'Product Settings', IBFW_DOMAIN );?>
                    </li>
                    
                </ul>
                <div id="tab-default" class="tab-content current">
                    <div class="attribute_div">
                        <div class="label_div">Show Label</div>
                        <div class="input_div">
                            <?php
                            $lbl = get_post_meta($post->ID, 'ocpl_show_label', true);

                            if( $lbl == '') {
                                $lbl = 'on';
                            }
                            ?>
                            <input type="checkbox" name="ocpl_show_label" <?php if($lbl == "on") { echo "checked"; } ?>>
                        </div>
                    </div>  
                    <div class="attribute_div">
                        <div class="label_div">Position</div>
                        <div class="input_div ocpl_pos_indiv">
                            <?php
                                $left = get_post_meta($post->ID, 'ocpl_left', true); 
                                $right = get_post_meta($post->ID, 'ocpl_right', true); 
                                $top = get_post_meta($post->ID, 'ocpl_top', true); 
                                $bottom = get_post_meta($post->ID, 'ocpl_bottom', true); 
                                if(empty($left)) {
                                    $left = "-20";
                                } else {
                                    $left = $left;
                                }

                                if(empty($right)) {
                                    $right = "0";
                                } else {
                                    $right = $right;
                                }

                                if(empty($top)) {
                                    $top = "-20";
                                } else {
                                    $top = $top;
                                }

                                if(empty($bottom)) {
                                    $bottom = "0";
                                } else {
                                    $bottom = $bottom;
                                }
                            ?>
                            <label>Left</label>
                            <input type="number" name="ocpl_left" value="<?php echo $left; ?>">
                            <label>Right</label>
                            <input type="number" name="ocpl_right" value="<?php echo $right; ?>">
                            <label>Top</label>
                            <input type="number" name="ocpl_top" value="<?php echo $top; ?>">
                            <label>Bottom</label>
                            <input type="number" name="ocpl_bottom" value="<?php echo $bottom; ?>">
                        </div>
                    </div> 
                    <div class="attribute_div">
                        <div class="label_div">Discount Text</div>
                        <div class="input_div">
                            <?php 
                                $ocpl_discount_text = get_post_meta($post->ID,'ocpl_discount_text',true);
                                if(empty($ocpl_discount_text)) {
                                    $ocpl_discount_text = "Sale";
                                } else {
                                    $ocpl_discount_text = $ocpl_discount_text;
                                }
                            ?>
                            <input type="text" name="ocpl_discount_text" value="<?php echo $ocpl_discount_text; ?>">
                            <span class="ocpl_desc">Use the <strong>&lt;br&gt;</strong> tag to enter line breaks between words.</span>
                        </div>
                    </div>
                </div>
                <div id="tab-data" class="tab-content">
                    <div class="attribute_div">
                        <div class="label_div">Label Font Color</div>
                        <div class="input_div">
                            <?php
                            $ocpl_font_clr = get_post_meta( $post->ID, 'ocpl_font_clr', true);
                                
                            if($ocpl_font_clr == '') {
                                $ocpl_font_clr = '#ffffff';
                            }
                            ?>
                            <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo $ocpl_font_clr; ?>" name="ocpl_font_clr" value="<?php echo $ocpl_font_clr; ?>"/>
                        </div>
                    </div>
                    <div class="attribute_div">
                        <div class="label_div">Background Color</div>
                        <div class="input_div">
                            <?php
                            $ocpl_bg_clr = get_post_meta( $post->ID, 'ocpl_bg_clr', true);
                                
                            if($ocpl_bg_clr == '') {
                                $ocpl_bg_clr = '#000000';
                            }
                            ?>
                            <input type="text" class="color-picker" data-alpha="true" data-default-color="<?php echo $ocpl_bg_clr; ?>" name="ocpl_bg_clr" value="<?php echo $ocpl_bg_clr; ?>"/>
                        </div>
                    </div>
                    <div class="attribute_div">
                        <div class="label_div">Font Size</div>
                        <div class="input_div">
                            <?php 
                                $ocpl_ft_size = get_post_meta($post->ID,'ocpl_ft_size',true); 
                                if(empty($ocpl_ft_size)) {
                                    $ft_size = "12";
                                } else {
                                    $ft_size = $ocpl_ft_size;
                                }
                            ?>
                            <input type="number" name="ocpl_ft_size" value="<?php echo $ft_size; ?>"> 
                        </div>
                    </div>
                    <div class="attribute_div">
                        <div class="label_div">Label Shape</div>
                        <div class="input_div">
                            <?php $shape = get_post_meta($post->ID, 'ocpl_lbl_shape', true); ?>
                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="square" <?php if($shape == "square" || empty($shape)){ echo "checked"; }?> />
                                <div class="ibfw_square_data">
                                    <div class="ibfw_square"></div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="rectangle" <?php if($shape == "rectangle"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_rectangle"></div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="rectangle_up" <?php if($shape == "rectangle_up"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_rectangle_up"></div>
                                </div>
                            </label>
                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="offers" <?php if($shape == "offers"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_offers">
                                        <i style="background-color:#dac6c8; border-color:#dac6c8;" class="template-i "></i>            
                                        <i style="background-color:#dac6c8; border-color:#dac6c8;" class="template-i-before "></i>
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="tag" <?php if($shape == "tag"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_tag">
                                        <i style="background-color:#8aaae5; border-color:#8aaae5;" class="template-span-before "></i>
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="collar" <?php if($shape == "collar"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_collar">
                                        <i style="background-color:#295f2d; border-color:#295f2d;" class="template-span-before "></i>
                                        <i style="background-color:#295f2d; border-color:#295f2d;" class="template-i-after "></i>
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="rectangle_round" <?php if($shape == "rectangle_round") { echo "checked"; } ?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_rectangle_round">
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="rectangle_circle" <?php if($shape == "rectangle_circle") { echo "checked"; } ?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_rectangle_circle">
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="circle" <?php if($shape == "circle") { echo "checked"; }?> />
                                <div class="ibfw_square_data">
                                    <div class="ibfw_circle">
                                    </div>
                                </div>
                            </label>

                            <label class="layersMenu">
                                <input type="radio" name="ocpl_lbl_shape" value="corner_badge" <?php if($shape == "corner_badge"){ echo "checked"; }?>/>
                                <div class="ibfw_square_data">
                                    <div class="ibfw_corner_badge">
                                        <i style="background-color:#adf0d1; border-color:#adf0d1;" class="template-i-before "></i>
                                        <i class="template-i-after "></i>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
                <div id="tab-general" class="tab-content">
                    <div class="attribute_div">
                        <div class="label_div">Condition</div>
                        <div class="input_div">
                            <?php $pro_con = get_post_meta($post->ID,'ocpl_pro_condition',true); ?>
                            <select class="ocpl_pro_condition" name="ocpl_pro_condition">
                                <option value="">Select Option</option>
                                <option value="all_products" <?php if($pro_con == "all_products") { echo "selected"; } ?>>All Products</option>
                                <option value="price" <?php if($pro_con == "price") { echo "selected"; } ?>>Price</option>
                                <option value="category" <?php if($pro_con == "category") { echo "selected"; } ?>>Category</option>
                                <option value="tag" <?php if($pro_con == "tag") { echo "selected"; } ?>>Tag</option>
                                <option value="onsale" <?php if($pro_con == "onsale") { echo "selected"; } ?>>On Sale</option>
                            </select>
                        </div>
                    </div>   
                    <div class="attribute_div ocpl_badge_cond">
                        <div class="child_div ocpl_price_div" style="display: none;">
                            <h2 class="des_head">Price</h2>
                            <label>Price</label>
                            <?php $price_con = get_post_meta($post->ID,'ocpl_price_condition',true); ?>
                            <select class="ocpl_price_condition" name="ocpl_price_condition">
                                <option value="between" <?php if($price_con == "between") { echo "selected"; } ?>>Between</option>
                                <option value="lessthan" <?php if($price_con == "lessthan") { echo "selected"; } ?>>Less than</option>
                                <option value="greaterthan" <?php if($price_con == "greaterthan") { echo "selected"; } ?>>Greater than</option>
                            </select>
                            <div class="ocpl_price_between_div">
                                <?php $ocpl_bet1 = get_post_meta($post->ID,'ocpl_bet1',true); ?>
                                <div class="ocpl_prbtwn">
                                    <label>Minimum Price</label>
                                    <input type="number" name="ocpl_bet1" value="<?php echo $ocpl_bet1; ?>">
                                </div>
                                <?php $ocpl_bet2 = get_post_meta($post->ID,'ocpl_bet2',true); ?>
                                <div class="ocpl_prbtwn">
                                    <label>Maximum Price</label>
                                    <input type="number" name="ocpl_bet2" value="<?php echo $ocpl_bet2; ?>">
                                </div>
                            </div>
                            <div class="ocpl_price_single_div" style="display: none;">
                                <?php $ocpl_price = get_post_meta($post->ID,'ocpl_price',true); ?>
                                <label>Price</label>
                                <input type="number" name="ocpl_price" value="<?php echo $ocpl_price; ?>">
                            </div>
                        </div>
                        <div class="child_div ocpl_category_div" style="display: none;">
                            <h2 class="des_head">Category</h2>
                            <?php
                                $orderby = 'name';
                                $order = 'asc';
                                $hide_empty = false;
                                $cat_args = array(
                                    'orderby'    => $orderby,
                                    'order'      => $order,
                                    'hide_empty' => $hide_empty,
                                    'parent' => 0,
                                );
                                $ocpl_categories = get_terms( 'product_cat', $cat_args );
                                $category = get_post_meta($post->ID,'ocpl_cat',true);
                                foreach( $ocpl_categories as $ocpl_category ) {
                                    ?>
                                    <div class="ocpl_catlist">
                                    <input type="checkbox" name="ocpl_cat[]" value="<?php echo $ocpl_category->term_id;?>" <?php if(!empty($category) && in_array($ocpl_category->term_id,$category)){echo "checked";} ?>>
                                    <label><?php echo $ocpl_category->name;?></label>
                                    </div>
                                    <?php 
                                } 
                            ?>   
                        </div>
                        <div class="child_div ocpl_tag_div" style="display: none;">
                            <h2 class="des_head">Tag</h2>
                            <?php
                                $ocpl_tags = $terms = get_terms(array('taxonomy' => 'product_tag', 'hide_empty' => false));
                                $tag = get_post_meta($post->ID,'ocpl_tag',true);
                                foreach( $ocpl_tags as $ocpl_tag ) {
                                    ?>
                                    <div class="ocpl_catlist">
                                        <input type="checkbox" name="ocpl_tag[]" value="<?php echo $ocpl_tag->term_id;?>" <?php if(!empty($tag) && in_array($ocpl_tag->term_id,$tag)){echo "checked";} ?>>
                                        <label>
                                            <?php echo $ocpl_tag->name;?>
                                        </label>
                                    </div>
                                    <?php 
                                } 
                            ?>
                        </div>
                        <div class="child_div ocpl_onsale_div" style="display: none;">
                            <h2 class="des_head">Onsale</h2>
                            <?php $on_sale = get_post_meta($post->ID,'ocpl_onsale',true); ?>
                            <label>Is on Sale</label>
                            <select name="ocpl_onsale" class="ocpl_onsale">
                                <option value="no" <?php if($on_sale == "no") { echo "selected"; } ?>>No</option>
                                <option value="yes" <?php if($on_sale == "yes") { echo "selected"; } ?>>Yes</option>
                            </select>
                        </div>
                    </div>          
                </div>
            </div>
            <?php
        }

        function IBFW_meta_save( $post_id, $post ){
            // the following line is needed because we will hook into edit_post hook, so that we can set default value of checkbox.
            if ($post->post_type != 'ibfw_product_label') {return;}
            // Is the user allowed to edit the post or page?
            if ( !current_user_can( 'edit_post', $post_id )) return;
            // Perform checking for before saving
            $is_autosave = wp_is_post_autosave($post_id);
            $is_revision = wp_is_post_revision($post_id);
            $is_valid_nonce = (isset($_POST['OCPL_meta_save_nounce']) && wp_verify_nonce( $_POST['OCPL_meta_save_nounce'], 'OCPL_meta_save' )? 'true': 'false');

            if ( $is_autosave || $is_revision || !$is_valid_nonce ) return;

            /*=======================Label Setting================================*/
            $ocpl_show_label = sanitize_text_field( $_REQUEST['ocpl_show_label'] );

            if(isset($_REQUEST['ocpl_show_label']) && $_REQUEST['ocpl_show_label'] == 'on') {
                $ocpl_show_label = sanitize_text_field( $_REQUEST['ocpl_show_label'] );
            } else {
                $ocpl_show_label = 'off';
            }

            update_post_meta($post_id, 'ocpl_show_label', $ocpl_show_label);

            $ocpl_left   = sanitize_text_field( $_REQUEST['ocpl_left'] ); 
            $ocpl_right  = sanitize_text_field( $_REQUEST['ocpl_right'] ); 
            $ocpl_top    = sanitize_text_field( $_REQUEST['ocpl_top'] );
            $ocpl_bottom = sanitize_text_field( $_REQUEST['ocpl_bottom'] );  
            update_post_meta($post_id, 'ocpl_left', $ocpl_left);
            update_post_meta($post_id, 'ocpl_right', $ocpl_right);
            update_post_meta($post_id, 'ocpl_top', $ocpl_top);
            update_post_meta($post_id, 'ocpl_bottom', $ocpl_bottom);

            $ocpl_allowed_html = array(
              'br' => array()
            );
            $ocpl_discount_text = wp_kses( $_REQUEST['ocpl_discount_text'], $ocpl_allowed_html );
            update_post_meta($post_id, 'ocpl_discount_text', $ocpl_discount_text);

            /*====================Design Setting==================================*/
            $ocpl_font_clr = sanitize_text_field( $_REQUEST['ocpl_font_clr'] );
            update_post_meta($post_id, 'ocpl_font_clr', $ocpl_font_clr);

            $ocpl_bg_clr = sanitize_text_field( $_REQUEST['ocpl_bg_clr'] );
            update_post_meta($post_id, 'ocpl_bg_clr', $ocpl_bg_clr);

            $ocpl_ft_size = sanitize_text_field( $_REQUEST['ocpl_ft_size'] );
            update_post_meta($post_id, 'ocpl_ft_size', $ocpl_ft_size);

            $ocpl_lbl_shape = sanitize_text_field( $_REQUEST['ocpl_lbl_shape'] );
            update_post_meta($post_id, 'ocpl_lbl_shape', $ocpl_lbl_shape);

            /*====================Design Setting==================================*/
            $ocpl_pro_condition = sanitize_text_field( $_REQUEST['ocpl_pro_condition'] );
            update_post_meta($post_id, 'ocpl_pro_condition', $ocpl_pro_condition);

            /*---price---*/
            $ocpl_price_condition = sanitize_text_field( $_REQUEST['ocpl_price_condition'] );
            update_post_meta($post_id, 'ocpl_price_condition', $ocpl_price_condition);

            $ocpl_bet1 = sanitize_text_field( $_REQUEST['ocpl_bet1'] );
            update_post_meta($post_id, 'ocpl_bet1', $ocpl_bet1);
            $ocpl_bet2 = sanitize_text_field( $_REQUEST['ocpl_bet2'] );
            update_post_meta($post_id, 'ocpl_bet2', $ocpl_bet2);
            $ocpl_price = sanitize_text_field( $_REQUEST['ocpl_price'] );
            update_post_meta($post_id, 'ocpl_price', $ocpl_price);
            /*---price---*/

            /*---category---*/
            $ocpl_cat = $this->recursive_sanitize_text_field( $_REQUEST['ocpl_cat'] );
            update_post_meta($post_id, 'ocpl_cat', $ocpl_cat);
            /*---category---*/

            /*---tag---*/
            $ocpl_tag = $this->recursive_sanitize_text_field( $_REQUEST['ocpl_tag'] );
            update_post_meta($post_id, 'ocpl_tag', $ocpl_tag);
            /*---tag---*/

            /*---onsale---*/
            $ocpl_onsale = sanitize_text_field( $_REQUEST['ocpl_onsale'] );
            update_post_meta($post_id, 'ocpl_onsale', $ocpl_onsale);
            /*---onsale---*/
        }


        function recursive_sanitize_text_field($array) {
            foreach ( $array as $key => &$value ) {
                if ( is_array( $value ) ) {
                    $value = $this->recursive_sanitize_text_field($value);
                }else{
                    $value = sanitize_text_field( $value );
                }
            }
            return $array;
        }


        function IBFW_support_rating_donate_notice() {
            $screen = get_current_screen();
            if( 'ibfw_product_label' == $screen->post_type
                && 'edit' == $screen->base ) {
                ?>
                <div class="ibfw_ratesup_notice_main">
                    <div class="ibfw_rateus_notice">
                        <div class="ibfw_rtusnoti_left">
                            <h3>Rate Us</h3>
                            <label>If you like our plugin, </label>
                            <a target="_blank" href="https://wordpress.org/support/plugin/improved-badges-for-woocommerce/reviews/?filter=5#new-post">
                                <label>Please vote us</label>
                            </a>
                            <label>, so we can contribute more features for you.</label>
                        </div>
                        <div class="ibfw_rtusnoti_right">
                            <img src="<?php echo IBFW_PLUGIN_DIR; ?>/includes/images/review.png" class="ocscw_review_icon">
                        </div>
                    </div>
                    <div class="ibfw_support_notice">
                        <div class="ibfw_rtusnoti_left">
                            <h3>Having Issues?</h3>
                            <label>You can contact us at</label>
                            <a target="_blank" href="https://www.xeeshop.com/support-us/?utm_source=aj_plugin&utm_medium=plugin_support&utm_campaign=aj_support&utm_content=aj_wordpress">
                                <label>Our Support Forum</label>
                            </a>
                        </div>
                        <div class="ibfw_rtusnoti_right">
                            <img src="<?php echo IBFW_PLUGIN_DIR; ?>/includes/images/support.png" class="ocscw_review_icon">
                        </div>
                    </div>
                </div>
                <div class="ibfw_donate_main">
                   <img src="<?php echo IBFW_PLUGIN_DIR; ?>/includes/images/coffee.svg">
                   <h3>Buy me a Coffee !</h3>
                   <p>If you like this plugin, buy me a coffee and help support this plugin !</p>
                   <div class="ibfw_donate_form">
                      <a class="button button-primary ocwg_donate_btn" href="https://www.paypal.com/paypalme/shayona163/" data-link="https://www.paypal.com/paypalme/shayona163/" target="_blank">Buy me a coffee !</a>
                   </div>
                </div>
                <?php
            }
        }


        function init() {
            add_action('init', array($this, 'IBFW_create_custpost'));
            add_action('add_meta_boxes', array($this, 'IBFW_add_meta_box'));
            add_action( 'edit_post', array($this, 'IBFW_meta_save'), 10, 2);
            add_action( 'admin_notices', array($this, 'IBFW_support_rating_donate_notice' ));
        }

        public static function instance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
                self::$instance->init();
            }
            return self::$instance;
        }
    }
    IBFW_back::instance();
}