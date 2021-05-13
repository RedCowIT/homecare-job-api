<?php /** @noinspection PhpMultipleClassesDeclarationsInOneFile */

namespace Modules\Core\Tests\Unit\Services;

use Modules\Core\Services\MockEntityService;
use Tests\Support\TestEntity;
use Tests\TestCase;


class MockEntityServiceTestService extends MockEntityService
{
    protected string $class = TestEntity::class;
    protected array $data = [
        [
            "id" => 4,
            "name" => "John"
        ],
        [
            "id" => 5,
            "name" => "Andrew"
        ],
        [
            "id" => 6,
            "name" => "Mary"
        ]
    ];
}

class MockEntityServiceTest extends TestCase
{

    /**
     * @test
     */
    public function it_gets_mock_data()
    {
        $service = new MockEntityServiceTestService();

        $this->assertEquals('Andrew', $service->find(5)->name);

        $this->assertNull($service->find(666));

        $this->assertEquals($service->getData(), $service->query());
    }

    /**
     * @test
     */
    public function it_saves_mock_data_from_attributes()
    {
        $service = new MockEntityServiceTestService();

        $model = $service->save([
            'name' => 'Axel'
        ]);

        $this->assertEquals('Axel', $model->name);

        $this->assertInstanceOf(TestEntity::class, $model);
    }

    /**
     * @test
     */
    public function it_saves_mock_data_from_model()
    {
        $service = new MockEntityServiceTestService();

        $model = $service->save(new TestEntity([
            'name' => 'Rose'
        ]));

        $this->assertEquals('Rose', $model->name);

        $this->assertInstanceOf(TestEntity::class, $model);
    }

    /**
     * @test
     */
    public function it_updates_mock_data()
    {
        $service = new MockEntityServiceTestService();

        $model = $service->save([
            'name' => 'Axel'
        ]);

        $model->name = 'Slash';

        $model = $service->update($model->id, $model);

        $this->assertEquals('Slash', $model->name);
    }
}
