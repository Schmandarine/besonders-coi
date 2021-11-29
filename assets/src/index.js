import { siteNavigationComponent } from './js/site-navigation';
import { ablaufdiagramm } from './js/ablaufdiagramm';
import { magicscroller } from './js/magicscroller';
import { accordeonComponent } from './js/accordeon';
import { cardSliderComponent } from './js/karten-slider';
import { jqueryCustomScripts } from './js/jquery-scripts';
import { hexagonSliderComponent } from './js/hexagon-slider';
import { blogpostSliderComponent } from './js/blog-posts';



siteNavigationComponent();

if (document.getElementById('ablaufdiagrammContainer') != null) {
    ablaufdiagramm();
}


if (document.getElementById('pinContainer') != null) {
    magicscroller();
}


accordeonComponent();

cardSliderComponent();
hexagonSliderComponent();
blogpostSliderComponent();

jqueryCustomScripts();

