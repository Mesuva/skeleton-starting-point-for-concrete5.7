<?php
namespace Application\Theme\Skeleton;
use Concrete\Core\Page\Theme\Theme;
class PageTheme extends Theme {

	public function registerAssets() {
		$this->requireAsset('javascript', 'jquery');
	}

    protected $pThemeGridFrameworkHandle = 'SkeletonGrid';

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
