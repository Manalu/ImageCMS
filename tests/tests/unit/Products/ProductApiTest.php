<?php

require_once realpath(dirname(__FILE__) . '/../../..') . '/enviroment.php';

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2014-01-30 at 13:17:26.
 */
class ProductApiTest extends PHPUnit_Framework_TestCase {

    /**
     * @var ProductApi
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp() {
        $this->object = \Products\ProductApi::getInstance();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown() {
        
    }

    /**
     * @covers ProductApi::getError
     * @todo   Implement testGetError().
     */
    public function testGetError() {
        $this->assertEmpty($this->object->getError());
    }

    /**
     * @covers ProductApi::addProduct
     * @todo   Implement testAddProduct().
     */
    public function testAddProduct() {
        $data = array(
            'product_name' => 'Name',
            'active' => 'Active',
            'variant_name' => 'variantsName',
            'price_in_main' => 10,
            'currency' => 2,
            'number' => 'variantsNumber',
            'stock' => 1,
            'brand_id' => '',
            'category_id' => 36,
            'additional_categories_ids' => 'Categories',
            'short_description' => 'ShortDescription',
            'full_description' => 'FullDescription',
            'old_price' => 'OldPrice',
            'tpl' => 'tpl',
            'url' => 'Url',
            'meta_title' => 'MetaTitle',
            'meta_description' => 'MetaDescription',
            'meta_keywords' => 'MetaKeywords',
            'related_products' => 'RelatedProducts',
            'enable_comments' => 'EnableComments',
            'created' => 'Created' ? strtotime('Created') : '',
            'updated' => time(),
        );
        $model = $this->object->addProduct($data);
        $this->assertEmpty($this->object->getError());

        $this->object->deleteProduct($model->getId());
        $this->assertEmpty($this->object->getError());
    }

    /**
     * @covers ProductApi::addProductI18N
     * @todo   Implement testAddProductI18N().
     */
    public function testAddProductI18N() {
        $data = array(
            'product_name' => 'Name',
            'active' => 'Active',
            'variant_name' => 'variantsName',
            'price_in_main' => 10,
            'currency' => 2,
            'number' => 'variantsNumber',
            'stock' => 1,
            'brand_id' => '',
            'category_id' => 36,
            'additional_categories_ids' => 'Categories',
            'short_description' => 'ShortDescription',
            'full_description' => 'FullDescription',
            'old_price' => 'OldPrice',
            'tpl' => 'tpl',
            'url' => 'Url',
            'meta_title' => 'MetaTitle',
            'meta_description' => 'MetaDescription',
            'meta_keywords' => 'MetaKeywords',
            'related_products' => 'RelatedProducts',
            'enable_comments' => 'EnableComments',
            'created' => 'Created' ? strtotime('Created') : '',
            'updated' => time(),
        );
        $model = $this->object->addProduct($data);
        $this->assertEmpty($this->object->getError());

        $this->object->addProductI18N($model->getId(), $data, 'ua');
        $this->assertEmpty($this->object->getError());

        $this->object->deleteProduct($model->getId());
        $this->assertEmpty($this->object->getError());
    }

    /**
     * @covers ProductApi::addVariant
     * @todo   Implement testAddVariant().
     */
    public function testAddVariant() {
        $data = array(
            'product_name' => 'Name',
            'active' => 'Active',
            'variant_name' => 'variantsName',
            'price_in_main' => 10,
            'currency' => 2,
            'number' => 'variantsNumber',
            'stock' => 1,
            'brand_id' => '',
            'category_id' => 36,
            'additional_categories_ids' => 'Categories',
            'short_description' => 'ShortDescription',
            'full_description' => 'FullDescription',
            'old_price' => 'OldPrice',
            'tpl' => 'tpl',
            'url' => 'Url',
            'meta_title' => 'MetaTitle',
            'meta_description' => 'MetaDescription',
            'meta_keywords' => 'MetaKeywords',
            'related_products' => 'RelatedProducts',
            'enable_comments' => 'EnableComments',
            'created' => 'Created' ? strtotime('Created') : '',
            'updated' => time(),
        );
        $model = $this->object->addProduct($data);
        $this->assertEmpty($this->object->getError());

        $this->object->addVariant($model->getId(), $data, 'ru');
        $this->assertEmpty($this->object->getError());

        $this->object->deleteProduct($model->getId());
        $this->assertEmpty($this->object->getError());
    }

    /**
     * @covers ProductApi::addVariantI18N
     * @todo   Implement testAddVariantI18N().
     */
    public function testAddVariantI18N() {
        $data = array(
            'product_name' => 'Name',
            'active' => 'Active',
            'variant_name' => 'variantsName',
            'price_in_main' => 10,
            'currency' => 2,
            'number' => 'variantsNumber',
            'stock' => 1,
            'brand_id' => '',
            'category_id' => 36,
            'additional_categories_ids' => 'Categories',
            'short_description' => 'ShortDescription',
            'full_description' => 'FullDescription',
            'old_price' => 'OldPrice',
            'tpl' => 'tpl',
            'url' => 'Url',
            'meta_title' => 'MetaTitle',
            'meta_description' => 'MetaDescription',
            'meta_keywords' => 'MetaKeywords',
            'related_products' => 'RelatedProducts',
            'enable_comments' => 'EnableComments',
            'created' => 'Created' ? strtotime('Created') : '',
            'updated' => time(),
        );
        $model = $this->object->addProduct($data);
        $this->assertEmpty($this->object->getError());

        $this->object->addVariantI18N($model->getId(), $data, 'ua');
        $this->assertEmpty($this->object->getError());

        $this->object->deleteProduct($model->getId());
        $this->assertEmpty($this->object->getError());
    }

    /**
     * @covers ProductApi::updateProduct
     * @todo   Implement testUpdateProduct().
     */
    public function testUpdateProduct() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::updateProductI18N
     * @todo   Implement testUpdateProductI18N().
     */
    public function testUpdateProductI18N() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::updateVariant
     * @todo   Implement testUpdateVariant().
     */
    public function testUpdateVariant() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::updateVariantI18N
     * @todo   Implement testUpdateVariantI18N().
     */
    public function testUpdateVariantI18N() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProduct
     * @todo   Implement testDeleteProduct().
     */
    public function testDeleteProduct() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProductKits
     * @todo   Implement testDeleteProductKits().
     */
    public function testDeleteProductKits() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProductOrdes
     * @todo   Implement testDeleteProductOrdes().
     */
    public function testDeleteProductOrdes() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProductNotifications
     * @todo   Implement testDeleteProductNotifications().
     */
    public function testDeleteProductNotifications() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProductImages
     * @todo   Implement testDeleteProductImages().
     */
    public function testDeleteProductImages() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::getProductProperties
     * @todo   Implement testGetProductProperties().
     */
    public function testGetProductProperties() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::setProductPropertyValue
     * @todo   Implement testSetProductPropertyValue().
     */
    public function testSetProductPropertyValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::deleteProductPropertyValue
     * @todo   Implement testDeleteProductPropertyValue().
     */
    public function testDeleteProductPropertyValue() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::setProductAdditionalCategories
     * @todo   Implement testSetProductAdditionalCategories().
     */
    public function testSetProductAdditionalCategories() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::saveProductAdditionalImage
     * @todo   Implement testSaveProductAdditionalImage().
     */
    public function testSaveProductAdditionalImage() {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
                'This test has not been implemented yet.'
        );
    }

    /**
     * @covers ProductApi::getProducts
     * @todo   Implement testGetProducts().
     */
    public function testGetProducts() {
        $data = array(
            'product_name' => 'Name',
            'active' => 'Active',
            'variant_name' => 'variantsName',
            'price_in_main' => 10,
            'currency' => 2,
            'number' => 'variantsNumber',
            'stock' => 1,
            'brand_id' => '',
            'category_id' => 36,
            'additional_categories_ids' => 'Categories',
            'short_description' => 'ShortDescription',
            'full_description' => 'FullDescription',
            'old_price' => 'OldPrice',
            'tpl' => 'tpl',
            'url' => 'Url',
            'meta_title' => 'MetaTitle',
            'meta_description' => 'MetaDescription',
            'meta_keywords' => 'MetaKeywords',
            'related_products' => 'RelatedProducts',
            'enable_comments' => 'EnableComments',
            'created' => 'Created' ? strtotime('Created') : '',
            'updated' => time(),
        );
        $model = $this->object->addProduct($data);
        $this->assertEmpty($this->object->getError());

        $m = $this->object->getProducts($model->getId());
        $this->assertInstanceOf(PropelObjectCollection, $m);
        $this->assertEquals(1, count($m));

        $this->object->deleteProduct($model->getId());
        $this->assertEmpty($this->object->getError());
    }

}
