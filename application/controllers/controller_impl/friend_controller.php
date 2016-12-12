<?php

/**
 * Created by PhpStorm.
 * User: OptimusPrime
 * Date: 2016.11.28
 * Time: 9:36
 */
class Friend_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('model_impl/user_model');
		$this->load->helper('form');
		$this->load->model('model_impl/friend_model');
	}

	public function index() {
		$data['followinglist'] = null;
		$data['followerlist'] = null;
		$data['tofollowlist'] = null;
		if (!empty(get_cookie("username"))) {
			$account_id = get_cookie("account_id");
			$temp = $this->user_model->getFollowingUser($account_id);
			$data['followinglist'] = $temp;
			$data['followerlist'] = $this->user_model->getFollowerUser($account_id);
			$data['tofollowlist']=$this->user_model->getToFollowUser($account_id);
		} else {
			echo "The friend_controller->index fail!";
		}
		$this->load->view("php/friend", $data);
	}

	public function unfollower() {
		$follower_id = $this->input->post("follower_id");
		$my_id = get_cookie('account_id');
		if ((!empty($follower_id)) && (!empty($my_id))) {
			$data['account_id'] = $follower_id;
			$data['friend_id'] = $my_id;
			$result = $this->friend_model->deleteFriend($data);
			if ($result === false) {
				echo "The delete follower operation failed!";
			}
		}
		redirect(base_url('/controller_impl/friend_controller'));
	}

	public function unfollowing() {
		$following_id = $this->input->post("following_id");
		$my_id = get_cookie('account_id');
		if ((!empty($following_id)) && (!empty($my_id))) {
			$data['account_id'] = $my_id;
			$data['friend_id'] = $following_id;
//			echo $data['account_id']."   ".$data['friend_id'];
			$result = $this->friend_model->deleteFriend($data);
			if ($result === false) {
				echo "The delete following operation failed!";
			}
		}
		redirect(base_url('/controller_impl/friend_controller'));
	}
	public function tofollow() {
		$tofollow_id = $this->input->post("tofollow_id");
		$my_id = get_cookie('account_id');
		if ((!empty($tofollow_id)) && (!empty($my_id))) {
			$data['account_id'] = $my_id;
			$data['friend_id'] = $tofollow_id;
//			echo $data['account_id']."   ".$data['friend_id'];
			$result = $this->friend_model->insertFriend($data);
			if ($result === false) {
				echo "The insert tofollow operation failed!";
			}
		}
		redirect(base_url('/controller_impl/friend_controller'));
	}

}

