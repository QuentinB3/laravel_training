<div>
    <!-- <p> Current Menu Item {{ $pageName }} </p> -->
    @if ($pageName != "About Us") <a style='padding-right:10px' href="/about-us"> About Us </a> @endif
    @if ($pageName != "Our Mission") <a style='padding-right:10px' href="/mission" > Our Mission </a> @endif
    @if ($pageName != "Vacancies") <a style='padding-right:10px' href="/vacancies" > Vacancies </a> @endif
</div>