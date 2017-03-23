<div class="jumbotron contact">
    <div class="container contact">
        <form class="form" role="form" method="GET" action="/save">
            <h2>Contact me</h2>
            <div class="form-group">
                <label for="name">Last-Name</label>
                <input type="text" class="form-control" name="last_name" placeholder="Last-Name">
            </div>
            <div class="form-group">
                <label for="name">First-Name</label>
                <input type="text" class="form-control" name="first_name" placeholder="First-Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="textarea">Message</label>
                <textarea class="form-control" rows="3" name="message" placeholder="Message"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
</div>