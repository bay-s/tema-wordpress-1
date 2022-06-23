<div class="column comments-wrapper mt-6">


<div class="comments" id="comments">


    <div class="comments-header">

        <h2 class="comment-reply-title">
        <?php
        if(!have_comments()){
            echo "Leave a comment";
        }else{
            get_comments_number(). "Comments";
        }
        ?>
        </h2><!-- .comments-title -->

    </div><!-- .comments-header -->

    <div class="comments-inner">

    <?php 
wp_list_comments(
    array(
        "avatar_size" => "120",
        "style" => "div"
    )
    );
    ?>
    </div><!-- .comments-inner -->

</div><!-- comments -->

<hr class="" aria-hidden="true">
<?php
if(comments_open()){
    // comment_form(
    //     array(
    //         "class_form" => 'field',
    //         'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
    //         'title_reply_after'  => '</h2>'
    //     )
    //     );

	$comment_args = array(
		'class_submit' => 'button is-link',
		'comment_field' => '<p class="label"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label> <textarea id="comment" name="comment" class="textarea mt-4" cols="45" rows="8" aria-required="true" required="required"></textarea></p>',
		'fields' => array(
			'author' => '<p class="label">' . '<label for="author">' . __( 'Name' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="author" name="author" class="input is-link" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . $html_req . ' /></p>',
			'email'  => '<p class="label"><label for="email">' . __( 'Email' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
			'<input id="email" name="email" class="input" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30" aria-describedby="email-notes"' . $aria_req . $html_req  . ' /></p>',
			'url'    => '<p class="label"><label for="url">' . __( 'Website' ) . '</label> ' .
			'<input id="url" name="url" class="input" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></p>',
			)
	);
	comment_form($comment_args);

}
?>

</div>

<?php


