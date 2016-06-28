<?php
namespace Application\Theme\Skeleton;
use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme {
	
    protected $pThemeGridFrameworkHandle = 'SkeletonGrid';

    public function registerAssets() {
	$this->requireAsset('javascript', 'jquery');
	// $this->requireAsset('css', 'font-awesome');
	// $this->requireAsset('css', 'core/lightbox');
	// $this->requireAsset('javascript', 'core/lightbox');
    }

    public function getThemeName()
    {
        return t('Skeleton Starting Point');
    }

    public function getThemeDescription()
    {
        return t('A concrete5 theme based on Skeleton');
    }
    
    public function getThemeBlockClasses()
    {

    }

    public function getThemeAreaClasses()
    {

    }

    public function getThemeDefaultBlockTemplates()
    {

    }

    public function getThemeResponsiveImageMap()
    {

    }

    public function getThemeEditorClasses()
    {

    }

}

include_once('grids/skeleton_grid.php');
