<style>
    .left{ float: left;}
    .right {float: right;}
    .center{text-align: center;}
    .width70{ width: 70%;}
    .width25{ width: 25%;}
	.width50{ width: 50%;}
    #gopro{
        width: 100%;
        display: block;
        clear: both;
        padding: 10px;
        margin: 10px 8px 15px 5px;
        border: 1px solid #e1e1e1;
        background: #464646;
        color: #ffffff;
        overflow: hidden;
    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    table.widefat{
        margin-bottom: 15px;
    }
    table.widefat tr{
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    table.widefat tr:hover{
        /*background: #E6E6E6;*/
    }    

    #wrapper input[type='text']{
        width: 80%;
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    #wrapper input[type='text']:focus{
        border: 1px solid #1784c9;
        box-shadow: 0 0 7px #1784c9;
        -moz-box-shadow: 0 0 5px #1784c9;
        -webkit-box-shadow: 0 0 5px #1784c9;
    }
    #wrapper input[type='text'].small-text{
        width: 20%;
    }
    .proversion{
        color: red;
        font-style: italic;
    }
</style>

<div id="wrapper">
    <div id="gopro">
        <div class="left">
            <h1><b>WP ToolTips</b></h1>
        </div>
    </div>
    <div class="width25 right">
        <table class="widefat">
            <thead>
                <tr>
                    <th><?php _e("Support") ?></th>
                </tr>
                <tr>
                    <td>
                        <?php
                        _e("Do you have any questions ? Do you need any help ? Let us know on our website!");
                        ?>
                    </td>
                </tr>
                <tr>
                    <td class='center'>
                        <a href='http://smartcatdesign.net/under-construction-maintenance-mode-free-wordpress-plugin/' target='_blank' class='button-primary'>Support</a>
                    </td>
                </tr>
            </thead>
        </table>
        <table class="widefat">
            <thead>
                <tr>
                    <th><?php _e("") ?> <span class='proversion'></span></th>
                </tr>
                <tr>
                    <td>
                        <?php
                        _e("");
                        ?>
                    </td>
                </tr>
            </thead>
        </table>
    </div>
    <div class="width70 left">
        <form name="post_form" method="post" action="" enctype="multipart/form-data">
            <table class="widefat">
                <thead>
                    <tr>
                        <th colspan="2">Appearance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php _e('Logo') ?></td>
                        <td>
                            <input type="text" name="wptt_logo" value="<?php echo $wptt_logo ?>" placeholder="<?php _e('Enter image path/url or leave blank for no logo'); ?>"/>
                        </td>
                    </tr>
                         
                </tbody>
            </table>
            <input type="submit" name="submit" value="Update" class="button button-primary" />
            <input type="hidden" name="act" value="save" />
        </form>

    </div>
    <!--        <div class="alignleft" style="width: 30%;background:#edeae6 ">
            <h2 style="color: #B0CB1F;background: #414141;text-align: center;padding: 10px 0;margin-top: 10px;">Plugin Details</h2>
            <p style="text-align: center;padding: 10px">
    <?php _e("Use this plugin to set your entire website or specific pages offline for anyone who is not an admin.") ?>
                <br>
    <?php _e("This is perfect for building a site on a live domain, or if you want to make changes on a page on a live site, you can set the specific page offline") ?>
                <br>
    <?php _e("Set your own custom message. Future updates will allow for more customization. To request specific changes, please visit my website and submit your feedback") ?>
            </p>
            <p style="text-align: center">
                <a href="http://smartcatdesign.net/under-construction-maintenance-mode-free-wordpress-plugin/" target="_blank" class="button button-primary">Plugin Site</a>
            </p>
            <p style='text-align: center'>
                <img src='http://smartcatdesign.net/wp-content/uploads/2013/03/logo-medium.png' style="max-width: 100%"/>
            </p>
        </div> 
    </div>-->