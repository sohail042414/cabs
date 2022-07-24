@include('admin.common.errors')
@php($method = ($action =='create') ? 'POST' : 'PUT')
@php($action_url = ($action =='create') ? '/admin/airports' : '/admin/airports/'.$airport->id)

@include('geocode')
<form method="POST" action="{{ $action_url }}">
    
    {{ csrf_field() }}
    {{ method_field($method) }}
    <div id="geo-wrap">
        <div class="form-group">
            <label for="name">Name</label>
            <input name="name" type="text" value="{{ old('name',$airport->name) }}" class="form-control" id="airport-title">
            <small id="titleHelp" class="form-text text-muted">Used for display.</small>
        </div>

        <div class="form-group">
            <label for="key">Latitude</label>
            <input data-geo="lat" type="text" name="lat" value="{{ old('lat',$airport->lat) }}" id="airport-lat" class="form-control"> 
            <small id="keyHelp" class="form-text text-muted">This should be a valid latitude, max value is 9999.xxxxxxx very small change can be dangerous!</small>
        </div>
        <div class="form-group">
            <label for="lng">Longitude</label>
            <input data-geo="lng" type="text" name="lng" id="airport-lng"  class="form-control" value="{{ old('lng',$airport->lng) }}" >
            <small id="keyHelp" class="form-text text-muted">This should be a valid latitude, max value is 9999.xxxxxxx very small change can be dangerous!</small>    
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

<script type="text/javascript">
$(document).ready(function(){
    $("#airport-title").geocomplete({
        details: "#geo-wrap",
        detailsAttribute: "data-geo",
        componentRestrictions : {'country': ['ch']}
    });
});

</script>