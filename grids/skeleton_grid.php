<?php
namespace Concrete\Core\Page\Theme\GridFramework\Type;
use Concrete\Core\Page\Theme\GridFramework\GridFramework;
use Core;

class SkeletonGrid extends GridFramework
{
    public function getPageThemeGridFrameworkName()
    {
        return t('Skeleton Grid');
    }


    public function getPageThemeGridFrameworkContainerStartHTML()
    {
        return '<div class="container">';
    }

    public function getPageThemeGridFrameworkContainerEndHTML()
    {
        return '</div>';
    }

    public function getPageThemeGridFrameworkRowStartHTML()
    {
        return '<div class="row">';
    }

    public function getPageThemeGridFrameworkRowEndHTML()
    {
        return '</div>';
    }

    public function getPageThemeGridFrameworkColumnClasses()
    {
        $columns = array(
            'one',
            'two',
            'three',
            'four',
            'five',
            'six',
            'seven',
            'eight',
            'nine',
            'ten',
            'eleven',
            'twelve'
        );
        return $columns;
    }

    public function getPageThemeGridFrameworkColumnOffsetClasses()
    {
        $offsets = array(
        'offset-by-one',
        'offset-by-two',
        'offset-by-three',
        'offset-by-four',
        'offset-by-five',
        'offset-by-six',
        'offset-by-seven',
        'offset-by-eight',
        'offset-by-nine',
        'offset-by-ten',
        'offset-by-eleven'
        );
        return $offsets;
    }

    public function getPageThemeGridFrameworkColumnAdditionalClasses () {
        return 'columns';
    }

    public function getPageThemeGridFrameworkColumnOffsetAdditionalClasses() {
        return 'columns';
    }

}


$manager = Core::make('manager/grid_framework');
$manager->extend('SkeletonGrid', function($app) {
    return new SkeletonGrid();
});
