<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Repository;

/**
 * @template E
 * @template T of \Codebros\RealkoCommon\Domain\Entity\Enumeration
 */
abstract class EnumerationsRepository
{

	/**
	 * @var array<class-string<E>, class-string<T>>
	 */
	protected array $knownEnums = [
		\Codebros\RealkoCommon\Domain\Enum\AccessToLot::class => \Codebros\RealkoCommon\Domain\Entity\AccessToLot::class,
		\Codebros\RealkoCommon\Domain\Enum\AuctionKind::class => \Codebros\RealkoCommon\Domain\Entity\AuctionKind::class,
		\Codebros\RealkoCommon\Domain\Enum\BuildingLien::class => \Codebros\RealkoCommon\Domain\Entity\BuildingLien::class,
		\Codebros\RealkoCommon\Domain\Enum\Canalization::class => \Codebros\RealkoCommon\Domain\Entity\Canalization::class,
		\Codebros\RealkoCommon\Domain\Enum\Category::class => \Codebros\RealkoCommon\Domain\Entity\Category::class,
		\Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage::class => \Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage::class,
		\Codebros\RealkoCommon\Domain\Enum\CoreOfApartment::class => \Codebros\RealkoCommon\Domain\Entity\CoreOfApartment::class,
		\Codebros\RealkoCommon\Domain\Enum\Currency::class => \Codebros\RealkoCommon\Domain\Entity\Currency::class,
		\Codebros\RealkoCommon\Domain\Enum\Disposition::class => \Codebros\RealkoCommon\Domain\Entity\Disposition::class,
		\Codebros\RealkoCommon\Domain\Enum\EcologicalLoad::class => \Codebros\RealkoCommon\Domain\Entity\EcologicalLoad::class,
		\Codebros\RealkoCommon\Domain\Enum\Electricity::class => \Codebros\RealkoCommon\Domain\Entity\Electricity::class,
		\Codebros\RealkoCommon\Domain\Enum\ElectricityOnLot::class => \Codebros\RealkoCommon\Domain\Entity\ElectricityOnLot::class,
		\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceCertificate::class => \Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceCertificate::class,
		\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceRating::class => \Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceRating::class,
		\Codebros\RealkoCommon\Domain\Enum\Floor::class => \Codebros\RealkoCommon\Domain\Entity\Floor::class,
		\Codebros\RealkoCommon\Domain\Enum\Furnished::class => \Codebros\RealkoCommon\Domain\Entity\Furnished::class,
		\Codebros\RealkoCommon\Domain\Enum\Furniture::class => \Codebros\RealkoCommon\Domain\Entity\Furniture::class,
		\Codebros\RealkoCommon\Domain\Enum\Gas::class => \Codebros\RealkoCommon\Domain\Entity\Gas::class,
		\Codebros\RealkoCommon\Domain\Enum\Heating::class => \Codebros\RealkoCommon\Domain\Entity\Heating::class,
		\Codebros\RealkoCommon\Domain\Enum\HeatingElement::class => \Codebros\RealkoCommon\Domain\Entity\HeatingElement::class,
		\Codebros\RealkoCommon\Domain\Enum\Infrastructure::class => \Codebros\RealkoCommon\Domain\Entity\Infrastructure::class,
		\Codebros\RealkoCommon\Domain\Enum\InternetConnection::class => \Codebros\RealkoCommon\Domain\Entity\InternetConnection::class,
		\Codebros\RealkoCommon\Domain\Enum\KindOfPlotNumbers::class => \Codebros\RealkoCommon\Domain\Entity\KindOfPlotNumbers::class,
		\Codebros\RealkoCommon\Domain\Enum\Locality::class => \Codebros\RealkoCommon\Domain\Entity\Locality::class,
		\Codebros\RealkoCommon\Domain\Enum\LocationSource::class => \Codebros\RealkoCommon\Domain\Entity\LocationSource::class,
		\Codebros\RealkoCommon\Domain\Enum\Orientation::class => \Codebros\RealkoCommon\Domain\Entity\Orientation::class,
		\Codebros\RealkoCommon\Domain\Enum\Parking::class => \Codebros\RealkoCommon\Domain\Entity\Parking::class,
		\Codebros\RealkoCommon\Domain\Enum\PeriodOfChargesAndServices::class => \Codebros\RealkoCommon\Domain\Entity\PeriodOfChargesAndServices::class,
		\Codebros\RealkoCommon\Domain\Enum\PeriodOfPrice::class => \Codebros\RealkoCommon\Domain\Entity\PeriodOfPrice::class,
		\Codebros\RealkoCommon\Domain\Enum\ProtectedLandscapeArea::class => \Codebros\RealkoCommon\Domain\Entity\ProtectedLandscapeArea::class,
		\Codebros\RealkoCommon\Domain\Enum\ProtectionZone::class => \Codebros\RealkoCommon\Domain\Entity\ProtectionZone::class,
		\Codebros\RealkoCommon\Domain\Enum\RoadType::class => \Codebros\RealkoCommon\Domain\Entity\RoadType::class,
		\Codebros\RealkoCommon\Domain\Enum\SocialFacilities::class => \Codebros\RealkoCommon\Domain\Entity\SocialFacilities::class,
		\Codebros\RealkoCommon\Domain\Enum\Source::class => \Codebros\RealkoCommon\Domain\Entity\Source::class,
		\Codebros\RealkoCommon\Domain\Enum\SourceOfHotWater::class => \Codebros\RealkoCommon\Domain\Entity\SourceOfHotWater::class,
		\Codebros\RealkoCommon\Domain\Enum\StatusOfCommission::class => \Codebros\RealkoCommon\Domain\Entity\StatusOfCommission::class,
		\Codebros\RealkoCommon\Domain\Enum\StatusOfEstate::class => \Codebros\RealkoCommon\Domain\Entity\StatusOfEstate::class,
		\Codebros\RealkoCommon\Domain\Enum\StructureOfBuilding::class => \Codebros\RealkoCommon\Domain\Entity\StructureOfBuilding::class,
		\Codebros\RealkoCommon\Domain\Enum\SubtypeOfRealEstate::class => \Codebros\RealkoCommon\Domain\Entity\SubtypeOfRealEstate::class,
		\Codebros\RealkoCommon\Domain\Enum\TransportAccessibility::class => \Codebros\RealkoCommon\Domain\Entity\TransportAccessibility::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfChargesAndServices::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfChargesAndServices::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfCommission::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfCommission::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfContract::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfContract::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfDocument::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfDocument::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfOwnership::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfOwnership::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfPrice::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfPrice::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstate::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstate::class,
		\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstateCadastre::class => \Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstateCadastre::class,
		\Codebros\RealkoCommon\Domain\Enum\Utilisation::class => \Codebros\RealkoCommon\Domain\Entity\Utilisation::class,
		\Codebros\RealkoCommon\Domain\Enum\UtilisationByLandUsePlanning::class => \Codebros\RealkoCommon\Domain\Entity\UtilisationByLandUsePlanning::class,
		\Codebros\RealkoCommon\Domain\Enum\Water::class => \Codebros\RealkoCommon\Domain\Entity\Water::class,
	];

	/**
	 * @param class-string<E> $enumType
     *
     * @phpstan-return T
	 *
	 * @throws \Codebros\RealkoCommon\Domain\EntityNotFound
	 */
	abstract public function get(string $enumType, int $id): \Codebros\RealkoCommon\Domain\Entity\Enumeration;

	/**
	 * @param class-string<E> $enumType
     *
     * @phpstan-return T
	 */
	abstract public function find(string $enumType, int $id): ?\Codebros\RealkoCommon\Domain\Entity\Enumeration;

	/**
	 * @param class-string<E> $enumType
     *
	 * @phpstan-return T
	 */
	abstract public function findOrCreateNew(string $enumType, int $id, string $title): \Codebros\RealkoCommon\Domain\Entity\Enumeration;

}
