<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.8
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2016 Fuel Development Team
 * @link       http://fuelphp.com
 */

/**
 * The Welcome Controller.
 *
 * A basic controller example.  Has examples of how to set the
 * response body and status.
 *
 * @package  app
 * @extends  Controller
 */
class Controller_Welcome extends Controller
{
	/**
	 * The basic welcome message
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_index()
	{


		return Response::forge(View::forge('welcome/index'));
	}

	public function action_YesNo()
	{
		return Response::forge(View::forge('welcome/Yes-No'));
	}

	/**
	 * A typical "Hello, Bob!" type example.  This uses a Presenter to
	 * show how to use them.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_mail()
	{
		$validation = Validation::forge();
		$validation->add_field('username', 'ユーザー名', 'required|max_length[100]|valid_string[alpha,numeric,punctuation,dashes]' );
		$validation->add_field('password', 'パスワード', 'required|min_length[8]|max_length[100]|valid_string[alpha,numeric,punctuation,dashes]' );

		$data = $error = array();

		$validateRes = $validation->run(Input::post());
		$input = $validation->validated();
		$data['input'] = $input;

		// バリデーションエラー取得
		if( !empty($validation->error()) ) {
			foreach ($validation->error() as $field => $errorObj) {
				$error[$field] = $errorObj->get_message();
			}
		}

  	Debug::dump($input);
					// ログイン成功
					Response::redirect('welcome/index');


		}

	/**
	 * The 404 action for the application.
	 *
	 * @access  public
	 * @return  Response
	 */
	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
