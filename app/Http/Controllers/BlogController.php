<?php
namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\PostRepository;
use Illuminate\Http\Request;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Http\Controllers\AppBaseController;
use Flash;
use Response;

class BlogController extends Controller
{
    /**
     * @var mixed
     */
    private $postRepository;

    /**
     * @param PostRepository $postRepo
     */
    public function __construct(PostRepository $postRepo)
    {
        $this->postRepository = $postRepo;
    }

    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
        $this->postRepository->pushCriteria(new RequestCriteria($request));
        $posts = $this->postRepository->paginate(5);

        return view('blog.index')->with('posts', $posts);
    }

        public function show(Post $post)
	    {
	        $post = $this->postRepository->findWithoutFail($post);

	        if (empty($post)) {
	            Flash::error('Post not found');

	            return redirect(route('blog.index'));
	        }

	return view('blog.single')->with('post', $post);
    }
}
