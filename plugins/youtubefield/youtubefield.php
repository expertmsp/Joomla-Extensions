<?php
// no direct access
defined ( '_JEXEC' ) or die ( 'Restricted access' );
 
class plgContentYoutubefield extends JPlugin {
 
        /**
         * Load the language file on instantiation.
         * Note this is only available in Joomla 3.1 and higher.
         * If you want to support 3.0 series you must override the constructor
         *
         * @var boolean
         * @since 3.1
         */
 
        protected $autoloadLanguage = true;
 
        function onContentPrepareForm($form, $data) {
        
                $app = JFactory::getApplication();
                $option = $app->input->get('option');
 
                switch($option) {
 
                    case 'com_content':
                        if ($app->isAdmin()) {
                                
                                //Hard-coded array of cateogry IDs. You could easily incorporate 
                                //a category field in the plugin XML to dynamically create this array
                                $selected_categories = array(43);
                                
                                JForm::addFormPath(__DIR__ . '/forms');
                                
                                //Show specific forms based on categories
                                if( is_array($data) && in_array($data['catid'], $selected_categories) ){
                                    
                                    $form->loadFile('dodgers', false);
                                    
                                }else{

                                    $form->loadFile('content', false);

                                }  
                                
                        }
                        return true;
 
                }

                return true;

        }
        
        /**
	 * Plugin that loads module positions within content
	 *
	 * @param   string   $context   The context of the content being passed to the plugin.
	 * @param   object   &$article  The article object.  Note $article->text is also available
	 * @param   mixed    &$params   The article params
	 * @param   integer  $page      The 'page' number
	 *
	 * @return  mixed   true if there is an error. Void otherwise.
	 *
	 * @since   1.6
	 */	
	public function onContentBeforeDisplay($context, &$article, &$params, $page = 0)
	{
            $return=false;
            if(!empty($article->attribs)){
            $attributes = json_decode($article->attribs);            
            if(isset($attributes->youtube_link) && !empty($attributes->youtube_link)){
                $youtube_url_id = $attributes->youtube_link;
            $return ="";
//            $return .='<div class="tp-video"><embed width="320" height="234" src="http://www.youtube.com/embed/'.$youtube_url_id .'"></div>';
         $return .='<div class="embed-responsive embed-responsive-16by9"> <iframe class="embed-responsive-item" src="http://www.youtube.com/embed/'.$youtube_url_id .'?rel=0" allowfullscreen=""></iframe></div>';
            }
            }
            return $return;
	}
	
 
}
?>