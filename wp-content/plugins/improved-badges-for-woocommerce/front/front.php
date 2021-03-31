<?php

if (!defined('ABSPATH'))
  exit;

if (!class_exists('IBFW_front')) {

    class IBFW_front {

        protected static $instance;
       
        function IBFW_frontdesign() {
            global $product;
            $is_setup = false;
            $price = $product->get_price();
            $categories = $product->get_category_ids();
            $tags = $product->get_tag_ids();

            $args = array(
                'post_type' => 'ibfw_product_label',
            );

            $query = new WP_Query( $args );
            if( $query->have_posts() ) {
                while( $query->have_posts() ) {
                    $query->the_post();
                    global $post;
                    
                    $pro_con = get_post_meta($post->ID, 'ocpl_pro_condition', true);
                    if( $is_setup != true ) {
                        if ($pro_con == "all_products") {
                            $this->IBFW_create_label($post->ID);
                        } elseif ($pro_con == "price") {
                            $price_con = get_post_meta($post->ID, 'ocpl_price_condition', true);
                            if($price_con == "between") {
                                $ocpl_bet1 = get_post_meta($post->ID, 'ocpl_bet1', true);
                                $ocpl_bet2 = get_post_meta($post->ID, 'ocpl_bet2', true);
                                if($price > $ocpl_bet1 && $price < $ocpl_bet2) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            }
                            if($price_con == "lessthan") {
                                $ocpl_price = get_post_meta($post->ID, 'ocpl_price', true);
                                if($price < $ocpl_price) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            }
                            if($price_con == "greaterthan") {
                                $ocpl_price = get_post_meta($post->ID, 'ocpl_price', true);
                                if($price > $ocpl_price) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            }
                        } elseif ($pro_con == "category") {
                            $category = get_post_meta($post->ID, 'ocpl_cat', true);
                            
                            if(!empty($category)) {
                                if(array_intersect($category, $categories)) {
                                    $this->IBFW_create_label($post->ID);
                                }  
                            }

                            
                        } elseif ($pro_con == "tag") {
                            $tag = get_post_meta($post->ID, 'ocpl_tag', true);
                            
                            if(!empty($tag)) {
                                if(array_intersect($tags, $tag)) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            }

                        } elseif ($pro_con == "onsale") {
                            $on_sale = get_post_meta($post->ID, 'ocpl_onsale', true);
                            if( $on_sale == "no") {
                                if(empty($product->is_on_sale())) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            } else {
                                if($product->is_on_sale() == 1) {
                                    $this->IBFW_create_label($post->ID);
                                }
                            }                       
                        }
                    }
                }
            }
            wp_reset_postdata();
        }

        function IBFW_create_label($post_id) {
            $lbl = get_post_meta($post_id, 'ocpl_show_label', true);
            $left = get_post_meta($post_id, 'ocpl_left', true);
            $right = get_post_meta($post_id, 'ocpl_right', true);
            $top = get_post_meta($post_id, 'ocpl_top', true);
            $bottom = get_post_meta($post_id, 'ocpl_bottom', true);
            $ocpl_discount_text = get_post_meta($post_id, 'ocpl_discount_text', true);
            $ocpl_font_clr = get_post_meta($post_id, 'ocpl_font_clr', true);
            $ocpl_bg_clr = get_post_meta($post_id, 'ocpl_bg_clr', true);
            $ft_size = get_post_meta($post_id, 'ocpl_ft_size', true);
            $shape = get_post_meta($post_id, 'ocpl_lbl_shape', true);

            $text = '<span style="font-size: '.$ft_size.'px;">'.$ocpl_discount_text.'</span>';
           
            if($right != 0) {
                $left = "inherit";
            } else {
                $left = $left."px";
            }

            $style = "top:".$top."px;right:".$right."px;bottom:".$bottom."px;left:".$left.";background-color:".$ocpl_bg_clr.";color:".$ocpl_font_clr.";";

            if($lbl == "on") {
                if($shape == "square") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_square" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "rectangle") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_rectangle" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                }else if ($shape == "rectangle_up") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_rectangle_up" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                }else if($shape == "offers") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_offers" style="<?php echo $style; ?>">
                                <i style="background-color:<?php echo $ocpl_bg_clr?>; border-color:<?php echo $ocpl_bg_clr?>;" class="template-i "></i>            
                                <i style="background-color:<?php echo $ocpl_bg_clr?>; border-color:<?php echo $ocpl_bg_clr?>;" class="template-i-before "></i>
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "tag") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_tag" style="<?php echo $style; ?>">
                                <i style="background-color:<?php echo $ocpl_bg_clr?>; border-color:<?php echo $ocpl_bg_clr?>;" class="template-span-before "></i>
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "collar") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_collar" style="<?php echo $style; ?>">
                                <i style="border-color:<?php echo $ocpl_bg_clr?>;" class="template-span-before "></i>
                                <i style="border-color:<?php echo $ocpl_bg_clr?>;" class="template-i-after "></i>
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "rectangle_round") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_rectangle_round" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "rectangle_circle") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_rectangle_circle" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "circle") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_circle" style="<?php echo $style; ?>">
                                <b><?php echo $text; ?></b>
                            </div>
                        </div>
                    <?php
                } else if ($shape == "corner_badge") {
                    ?>
                        <div class="ibfw_square_data">
                            <div class="ibfw_corner_badge" style="color: <?php echo $ocpl_font_clr; ?>;"> 
                                <i style="background-color:<?php echo $ocpl_bg_clr?>; border-color:<?php echo $ocpl_bg_clr?>;" class="template-i-before "></i>
                                <i class="template-i-after "><b><?php echo $text; ?></b></i>
                                
                            </div>
                        </div>
                    <?php
                }
            }
        }



        function init() {
            add_action( 'woocommerce_after_shop_loop_item', array($this, 'IBFW_frontdesign'), 25 );
        }

        public static function instance() {
            if (!isset(self::$instance)) {
                self::$instance = new self();
                self::$instance->init();
            }
            return self::$instance;
        }
    }
    IBFW_front::instance();
}