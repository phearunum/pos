<div class="this-container this-padding this-text-black ">
    <div class="row" ng-controller="menu">
        <div id="menu_list"></div>
        <div class="col-xs-4 col-md-3 col-sm-3 this-padding this-text-black this-center" ng-repeat="x in names">
            <p>{{x.full_name}}</p>
        </div>

    </div>
</div>