<?php
session_start();
 include "../modal/pdo.php";
 include "../modal/product.php";
 date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_POST["rating_data"]))
{
    $user_id = $_POST["user_id"];
    $rating_data = $_POST["rating_data"];
    $user_review = $_POST["user_review"];
    $datetime = time();
    $product_id = $_POST["product_id"];
    $query = "INSERT INTO review_table
	(user_rating,user_review,datetime,product_id,user_id) VALUES ('$rating_data', '$user_review', '$datetime','$product_id', '$user_id') ";
   pdo_execute($query);
   echo "Your Review & Rating Successfully Submitted";
}
if(isset($_POST["action"]))
{
    $average_rating = 0;
    $total_review = 0;
    $five_star_review = 0;
    $four_star_review = 0;
    $three_star_review = 0;
    $two_star_review = 0;
    $one_star_review = 0;
    $total_user_rating = 0;
    $review_content = array();
    $id = $_POST["action"];
    $query = "
    SELECT review_table.*, account.username
FROM review_table 
JOIN account ON review_table.user_id = account.id
WHERE review_table.product_id = '$id'
ORDER BY review_table.review_id DESC";
    $result = pdo_query($query);
    foreach($result as $row)
    {
        $review_content[] = array(
            'id'            => $row['review_id'],
            'product_id'    =>  $row["product_id"],
            'user_review'   =>  $row["user_review"],
            'rating'        =>  $row["user_rating"],
            'username'      =>  $row["username"],
            'datetime'      =>  date('l jS, F Y h:i:s A', $row["datetime"])
        );

        if($row["user_rating"] == '5')
        {
            $five_star_review++;
        }

        if($row["user_rating"] == '4')
        {
            $four_star_review++;
        }

        if($row["user_rating"] == '3')
        {
            $three_star_review++;
        }

        if($row["user_rating"] == '2')
        {
            $two_star_review++;
        }

        if($row["user_rating"] == '1')
        {
            $one_star_review++;
        }

        $total_review++;

        $total_user_rating = $total_user_rating + $row["user_rating"];

    }

    $average_rating = $total_user_rating / $total_review;

    $output = array(
        'average_rating'    =>  number_format($average_rating, 1),
        'total_review'      =>  $total_review,
        'five_star_review'  =>  $five_star_review,
        'four_star_review'  =>  $four_star_review,
        'three_star_review' =>  $three_star_review,
        'two_star_review'   =>  $two_star_review,
        'one_star_review'   =>  $one_star_review,
        'review_data'       =>  $review_content
    );
    echo json_encode($output);

}
