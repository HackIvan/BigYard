<?php



namespace App\Http\Controllers;
use App\User;


use App\Order;
use App\Recent;
use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $product = Product::take(20)->get();

        $roles = Role::take(8)->get();

        $categories = Category::whereNull('parent_id')->get();

        $recents = Recent::take(8)->get();

        $orders = Order::take(8)->get();

        $users = User::all();
        // dd($categories);

        // return view('home', ['allProducts' => $product]);
        return view(
            // 'home', ['allProducts' => $product], ['allRecents' => $recents],
            'home', ['allProducts' => $product, 'allRecents' => $recents, 'categories' => $categories, 'users' => $users, 'recentOrders' => $orders, 'Role' => $roles]


    );






        // ['allProduct' => $products]
    }
}
