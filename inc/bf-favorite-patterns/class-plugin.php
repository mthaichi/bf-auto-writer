<?php
namespace BF_FavoritePatterns;
class Plugin extends \BF_PluginBase\Plugin {

    protected $version = '0.0.1';

    public \BF_PluginBase\View $view;
    public \BF_PluginBase\Input $input;

    public function initialize( $base_dir ) {

        parent::initialize( $base_dir );
        $block_dir = $this->base_dir . '/build';
        
        $this->view = new \BF_PluginBase\View( $this );

        $this->input = new \BF_PluginBase\Input();
       /* 
        $base_block = new SampleBlock($this, $block_dir . '/sample');
        $base_block->initialize();

        $marquee_block = new MarqueeBlock($this, $block_dir . '/marquee');
        $marquee_block->initialize();
*/
        $this->option_page = new OptionPage($this);
        $this->option_page->initialize();
    }
}

