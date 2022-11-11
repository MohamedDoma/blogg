<?php

    function validatePost($post) {
        $errors = array();

        if (empty($post['title'])) {
            array_push($errors, "Title is required");
        }

        if (empty($post['body'])) {
            array_push($errors, "Body is required");
        }

        if (empty($post['topic_id'])) {
            array_push($errors, "Please select a topic");
        }

        $existingPost = selectOne('posts', ['title' => $post['title']]);
        if ($existingPost) {
            if (isset($_POST['update-post']) && $existingPost['id'] != $post['id']) {
                array_push($errors, 'Post with that Title already exists');
            }

            if (isset($_POST['add-post'])) {
                array_push($errors, 'Post with that Title already exists');
            }
        }

        return $errors;
    }