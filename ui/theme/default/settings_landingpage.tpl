{extends file="$layouts_admin"}
{block name="content"}




<div class="col-md-8 mx-auto">
    <h1 class="text-center fw-bolder display-6"> Landing page text editor</h1>
    <p class="text-center fw-bolder
">{{__('Click on the edit buttoon to edit the content of the pages')}}</p>
    <ol class="list-group list-group-numbered">
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3">{{__('Home Page')}}</div>

            </div>
            <a href="{$_url}settings/home-page" class="btn btn-primary">{{__("Edit")}}</a>
            <button type="button" class="btn btn-success ms-2">{{__("View")}}</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3">{{__('Terms and Condition')}}</div>

            </div>
            <a href="{$_url}settings/terms-page" type="" class="btn btn-primary">{{__("Edit")}}</a>
            <button type="button" class="btn btn-success ms-2">{{__("View")}}</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3">{{__('Cookie Policy')}}</div>

            </div>
            <a type="" href="{$_url}settings/cookie-page" class="btn btn-primary">{{__("Edit")}}</a>
            <button type="button" class="btn btn-success ms-2">{{__("View")}}</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3">{{__('Privacy Policy')}}</div>

            </div>
            <a href="{$_url}settings/privacy-policy-page" type="button" class="btn btn-primary">{{__("Edit")}}</a>
            <button type="button" class="btn btn-success ms-2">{{__("View")}}</button>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold fs-3">{{__('Footer Section')}}</div>

            </div>
            <a href="{$_url}settings/contact-page" class="btn btn-primary">{{__("Edit")}}</a>
            <button type="button" class="btn btn-success ms-2">{{__("View")}}</button>
        </li>
    </ol>
</div>



{/block}