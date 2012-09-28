<style type="text/css">
    #nf_info {
        padding: 10px;
        background-color: #fff;
        border: 2px dashed #69A74E;
        margin-right: 10px;
        float:right;
        width: 250px;
    }

    #nf-settings tr td {
        vertical-align: top;
        padding: 10px;
    }

    .nf-textarea {
        width: 500px;
        height: 200px;
        border: 1px solid #ccc;
    }

    p.message {
         background: #FFFBD8;
         border: 1px solid #F5EEAD;
         color: #333;
         margin: 10px 5px 5px 5px;
         padding: 10px;
    }

    #preview {
        border: 1px solid #ccc;
    }
</style>
<h1>NotFound.org 404 Page Settings</h1>

<div id="nf_info">
    Contributions welcome!  Hit me up <a href="http://twitter.com/_kennyk_">@_kennyk_</a>, or on the <a href="http://github.com/katzgrau/wp-notfound-org">github project page</a>. Or, reach him via <a href="mailto:katzgrau@gmail.com">email</a> with any questions.
</div>

<h2>Preview</h2>

<p> 
    If you're seeing this page, the plugin is active. You can make sure it's working by
    visiting a page that probably doesn't exist. List this one:
</p>

<p>
    <a target="_blank" href="<?php echo site_url() ?>/this-page-is-probably-a-404"><?php echo site_url() ?>/this-page-is-probably   -a-404</a>
</p>

<p />

<h2>Customization</h2>

<form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
    <table id="nf-settings">
        <tr>
            <th scope="row">
                404 Page Text
            </th>
            <td>
                <textarea wrap="off" class="nf-textarea" name="nf_template"><?php echo $nf_template; ?></textarea>
            </td>
            <td>
                This is the text that will be displayed at the top of the 404 page.
                You can use these pseudo-variables:
                <ul>
                    <li>{{SITE_URL}}</li>
                    <li>{{SITE_NAME}}</li>
                </ul>
            </td>
        </tr>
        <tr>
            <th scope="row">
                Save
            </th>
            <td>
                <input name="nf_submit" type="submit" value="Save!" />
            </td>
            <td>
            </td>
        </tr>
    </table>
</form>