<!-- Main view  -->
<h2>Resume</h2>

<table class="table">
    <tbody>
    <tr>
        <td>
            <a href="{{route('profiles.index')}}">
                <button type="button" class="btn btn-success m-r-sm">{{count($all_pr)}}</button>Profiles
            </a>
        </td>
        <td>
            <a href="{{route('channels.index')}}">
                <button type="button" class="btn btn-danger m-r-sm">{{count($all_ch)}}</button>Channels
            </a>
        </td>
        <td>
            <a href="{{route('subcategories.index')}}">
                <button type="button" class="btn btn-primary m-r-sm">{{count($all_sub)}}</button>Subcategories
            </a>
        </td>
        <td>
            <a href="{{route('categories.index')}}">
                <button type="button" class="btn btn-info m-r-sm">{{count($all_cat)}}</button>Categories
            </a>
        </td>
        <td>
            <a href="{{route('posts.index')}}">
                <button type="button" class="btn btn-info m-r-sm">{{$all_posts->count()}}</button>Posts
            </a>
        </td>
        <td>
            <a href="{{route('postcategories.index')}}">
                <button type="button" class="btn btn-info m-r-sm">{{count($all_postcat)}}</button>Post categories
            </a>
        </td>
        <td>
            <a href="{{route('discussions.index')}}">
                <button type="button" class="btn btn-info m-r-sm">{{count($all_postcat)}}</button> Discussions
            </a>
        </td>
        <td>
            <a href="{{route('roles.index')}}">
                <button type="button" class="btn btn-danger m-r-sm">{{count($all_roles)}}</button>Roles
            </a>
        </td>
        <td>
            <a href="{{route('status.index')}}">
                <button type="button" class="btn btn-info m-r-sm">4</button>Status
            </a>
        </td>
    </tr>
    </tbody>
</table>