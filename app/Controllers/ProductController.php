<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\ProductPropertyModel;

class ProductController extends BaseController
{
    protected $productModel;
    protected $propertyModel;

    public function __construct()
    {
        $this->productModel = new ProductModel();
        $this->propertyModel = new ProductPropertyModel();
    }

    // Menampilkan daftar produk
    public function index()
    {
        $data['products'] = $this->productModel->findAll();
        return view('product/index', $data);
    }

    // Menampilkan form tambah produk
    public function create()
    {
        return view('product/create');
    }

    // Menyimpan produk baru
    public function store()
    {
        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'image' => 'uploaded[image]|max_size[image,1024]|is_image[image]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $image = $this->request->getFile('image');
        $imageName = $image->getRandomName();
        $image->move(WRITEPATH . 'uploads', $imageName);

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'category' => $this->request->getPost('category'),
            'image' => $imageName,
        ];

        $this->productModel->insert($data);
        return redirect()->to('/products')->with('message', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form edit produk
    public function edit($id)
    {
        $data['product'] = $this->productModel->find($id);
        $data['properties'] = $this->propertyModel->where('product_id', $id)->findAll();
        return view('product/edit', $data);
    }

    // Mengupdate produk
    public function update($id)
    {
        $rules = [
            'name' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'name' => $this->request->getPost('name'),
            'price' => $this->request->getPost('price'),
            'category' => $this->request->getPost('category'),
        ];

        $this->productModel->update($id, $data);
        return redirect()->to('/products')->with('message', 'Produk berhasil diupdate.');
    }

    // Menghapus produk
    public function delete($id)
    {
        $this->productModel->delete($id);
        return redirect()->to('/products')->with('message', 'Produk berhasil dihapus.');
    }

    // Menambahkan properti dinamis
    public function addProperty($productId)
    {
        $data = [
            'product_id' => $productId,
            'property_name' => $this->request->getPost('property_name'),
            'property_value' => $this->request->getPost('property_value'),
        ];

        $this->propertyModel->insert($data);
        return redirect()->to("/products/edit/$productId")->with('message', 'Properti berhasil ditambahkan.');
    }

    // Menghapus properti dinamis
    public function deleteProperty($id)
    {
        $property = $this->propertyModel->find($id);
        $productId = $property['product_id'];

        $this->propertyModel->delete($id);
        return redirect()->to("/products/edit/$productId")->with('message', 'Properti berhasil dihapus.');
    }
}