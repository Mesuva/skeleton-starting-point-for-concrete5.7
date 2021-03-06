# A development start point theme for concrete5.7 that implements Skeleton's grid system

This theme is intended to act as a handy starting point for developers wishing to create a new theme for concrete5.7, utilisng the grid system from the [Skeleton framework ](http://getskeleton.com/) (all other styles have been removed).
It includes a GridFramework class for Skeleton, to allow columns based on Skeleton to be added via concrete5's layout

The styles also include [normalize.css](http://necolas.github.io/normalize.css/).

To use:
* Download the zip of the starting point and rename it as per what you'd like your theme to be called, e.g. 'new_theme'
* Edit the page_theme.php file, and change the line to namespace __Application\Theme\Skeleton;__ to namespace __Application\Theme\NewTheme;__  (camelcase the new name of your theme)
* Also edit the path_theme.php file's getThemeName and getThemeDescription functions to customise the theme name/description
* Copy new theme into /application/themes and install via the themes section of your 5.7 install
* Edit main.css directory to customise your theme's styling

The theme includes a sass directory, containing a .scss file to generate the skeleton.css file. If you use Sass this can be use to adjust the grid to your liking, but can otherwise be ignored.

