<h1>profile page</h1>

<form action="{{route('profile.save')}}" method="POST">
    @csrf
    <h2>Anonymous</h2>
    <input type="radio" id="off" name="anonymous" value="on">
    <label for="off">Privacy OFF</label><br>
    <input type="radio" id="on" name="anonymous" value="off">
    <label for="on">Privacy ON</label><br>

    <button type="submit">Save Changes</button>
</form>
