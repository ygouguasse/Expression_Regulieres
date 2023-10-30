<nav class="navbar navbar-expand-sm bg-primary navbar-dark w-100 rounded">
    <ul class="navbar-nav px-3 w-100">
        <li class="nav-item">
            <a  class="nav-link <?php ParDefaut(); NavClass("Accueil"); ?>"
                href="index.php?action=Accueil">
                Accueil
            </a>
        </li>
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("HTML"); ?>"
                href="index.php?action=HTML">
                HTML
            </a>
        </li>
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("JavaScript"); ?>"
                href="index.php?action=JavaScript">
                JavaScript
            </a>
        </li>
        <li class="nav-item">
            <a  class="nav-link <?php NavClass("PHP"); ?>"
                href="index.php?action=PHP">
                PHP
            </a>
        </li>
    </ul>
</nav>

<?php
function ParDefaut() {
    if (!isset($_GET["action"])) {
        echo "active";
    }
}

function NavClass($menu) {
    if (isset($_GET["action"]) &&
        $_GET["action"] === $menu) {
        echo ' active ';
    }
}
?>
