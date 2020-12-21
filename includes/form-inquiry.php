<form id="contact">
    <h3>Contact</h3>
    <fieldset>
        <label for="name">
            Name: <input type="text" name="name" placeholder="Name" required>
        </label>
        <label for="email">
            Email: <input type="email" name="email" placeholder="Email Address" required>
        </label>
        <label for="comment">
            Comment: <textarea name="comment" placeholder="Comment or Enquiry"></textarea>
        </label>
    </fieldset>
    <button type="submit">Submit</button>
</form>

<script>
    document.querySelector('#contact').addEventListener('submit', function(e){
        e.preventDefault();

        var endpoint = '<?php echo admin_url("admin-ajax.php");?>';
        var form = serialize(document.querySelector('#contact'));

        var formdata = new FormData;
        formdata.append('action','contact');
        formdata.append('contact', form);


        const XHR = new XMLHttpRequest();

        // Define what happens on successful data submission
        XHR.addEventListener( 'load', function(event) {
            alert(XHR .response);
        });

        // Define what happens in case of error
        XHR.addEventListener( 'error', function(event) {
            alert( 'Oops! Something went wrong.');
        });

        // Set up our request
        XHR.open( 'POST', endpoint);

        // Add the required HTTP header for form data POST requests
        // XHR.setRequestHeader( 'Content-Type', 'application/x-www-form-urlencoded' );

        // Finally, send our data.
        XHR.send(formdata);


    });
</script>