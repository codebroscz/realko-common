<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: 'realko_estate')]
class Estate
{

	#[ORM\Id]
	#[ORM\Column(type: 'uuid', unique: true)]
	#[ORM\GeneratedValue(strategy: 'CUSTOM')]
	#[ORM\CustomIdGenerator(class: \Ramsey\Uuid\Doctrine\UuidGenerator::class)]
	protected \Ramsey\Uuid\UuidInterface $id;

	#[ORM\Column(type: 'datetime_immutable')]
	protected \DateTimeImmutable $createdAt;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $deletedAt;

	#[ORM\Column]
	protected int $externalId;

	#[ORM\Column]
	protected int $version; // stamp

	/**
	 * @var \Doctrine\Common\Collections\Collection<Document>
	 */
	#[ORM\JoinTable(name: 'realko_estate_photos')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'photo_id', referencedColumnName: 'id', unique: true)]
	#[ORM\ManyToMany(targetEntity: Document::class, cascade: ['persist'])]
	protected \Doctrine\Common\Collections\Collection $photos;

	/**
	 * @var \Doctrine\Common\Collections\Collection<Document>
	 */
	#[ORM\JoinTable(name: 'realko_estate_documents')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'document_id', referencedColumnName: 'id', unique: true)]
	#[ORM\ManyToMany(targetEntity: Document::class, cascade: ['persist'])]
	protected \Doctrine\Common\Collections\Collection $documents;

	/**
	 * @var \Doctrine\Common\Collections\Collection<ExternalDocument>
	 */
	#[ORM\JoinTable(name: 'realko_estate_external_documents')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'external_document_id', referencedColumnName: 'id', unique: true)]
	#[ORM\ManyToMany(targetEntity: ExternalDocument::class, cascade: ['persist'])]
	protected \Doctrine\Common\Collections\Collection $externalDocuments;

	#[ORM\ManyToOne(targetEntity: AccessToLot::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\AccessToLot $accessToLot = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $accommodation = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $affiliateId = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $agentId;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $alimentation = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $annuity = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $apartmentInFamilyHouse = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaBuiltUp = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaFloor = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaNonResidential = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfBalcony = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfCellar = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfElevator = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfGarden = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfLoggia = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfLot = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfOffice = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfSales = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfStorage = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaOfTerrace = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaProduction = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $areaUse = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $atypical = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $auctionDate = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $auctionDateTour = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $auctionDateTour2 = null;

	#[ORM\ManyToOne(targetEntity: AuctionKind::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\AuctionKind $auctionKind = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $auctionPlace = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $auctionPriceExpertReport = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $auctionPriceMinimumBid = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $auctionPricePrincipal = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $balcony = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $blurLocationOnServers = null;

	#[ORM\ManyToOne(targetEntity: BuildingLien::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\BuildingLien $buildingLien = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $cableTv = null;

	#[ORM\ManyToOne(targetEntity: Canalization::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Canalization $canalization = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $capacityOfAlimentation = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $ceilingHeight = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $cellar = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $cleaning = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $clearCeilingHeight = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $constructionOnLot = null;

	#[ORM\ManyToOne(targetEntity: CoreOfApartment::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\CoreOfApartment $coreOfApartment = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $crane = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $craneLoad = null;

	#[ORM\ManyToOne(targetEntity: Currency::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Currency $currency = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $dateOfCreation = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $dateOfStatusActive = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $dateOfStatusReservation = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $dateOfStatusRealized = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $dateOfUpdate = null;

	#[ORM\Column(type: 'text', nullable: true)]
	protected ?string $description;

	#[ORM\Column(type: 'text', nullable: true)]
	protected ?string $descriptionOtherslanguages;

	#[ORM\ManyToOne(targetEntity: Disposition::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Disposition $disposition = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $divisionNumberOfPlot = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $dontAdvertisePrice = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $duplex = null;

	#[ORM\ManyToOne(targetEntity: EcologicalLoad::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\EcologicalLoad $ecologicalLoad = null;

	#[ORM\ManyToOne(targetEntity: Electricity::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Electricity $electricity = null;

	#[ORM\ManyToOne(targetEntity: ElectricityOnLot::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\ElectricityOnLot $electricityOnLot = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $elevator = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $elevatorLoad = null;

	#[ORM\ManyToOne(targetEntity: EnergyPerformanceRating::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceRating $energyPerformanceRating = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $energyPerformanceSummary = null;

	#[ORM\ManyToOne(targetEntity: EnergyPerformanceCertificate::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceCertificate $energyPerformanceCertificate = null;

	#[ORM\ManyToOne(targetEntity: Floor::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Floor $floor = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $foreigners = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $foreignersComment = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $freeFrom = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $freeImmediately = null;

	#[ORM\ManyToOne(targetEntity: Furnished::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Furnished $furnished = null;

	/**
	 * @var \Doctrine\Common\Collections\Collection<\Codebros\RealkoCommon\Domain\Entity\Furniture>
	 */
	#[ORM\ManyToMany(targetEntity: Furniture::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_furniture')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'furniture_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $furniture;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $garden = null;

	#[ORM\ManyToOne(targetEntity: Gas::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Gas $gas = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $gpsLat = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $gpsLng = null;

	#[ORM\ManyToOne(targetEntity: Heating::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Heating $heating = null;

	/**
	 * @var \Doctrine\Common\Collections\Collection<int, \Codebros\RealkoCommon\Domain\Entity\Heating2>
	 */
	#[ORM\OneToMany(mappedBy: 'estate', targetEntity: Heating2::class, cascade: ['persist'])]
	#[ORM\JoinColumn(onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $heating2;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $heatingComment = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $householdAppliances = null;

	#[ORM\ManyToMany(targetEntity: CharacterOfVillage::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_character_of_village')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'character_of_village_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $characterOfVillage;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $chargesAndServices = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $chargesAndServicesComment = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $children = null;

	#[ORM\ManyToMany(targetEntity: Infrastructure::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_infrastructure')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'infrastructure_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $infrastructure;

	#[ORM\ManyToOne(targetEntity: InternetConnection::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\InternetConnection $internetConnection = null;

	#[ORM\ManyToOne(targetEntity: Category::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Category $category = null;

	#[ORM\ManyToOne(targetEntity: KindOfPlotNumbers::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\KindOfPlotNumbers $kindOfPlotNumbers = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $lastFloor = null;

	#[ORM\OneToOne(targetEntity: Location::class, cascade: ['persist'])]
	protected ?Location $location = null;

	#[ORM\ManyToOne(targetEntity: Locality::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Locality $locality = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $loft = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $loggia = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $maximumNumberOfPeople = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $meetingRoom = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $minimumRentalPeriod = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $mortgage = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $multigenerational = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $neighbouringObjects = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $numberAndTypeOfHotelRooms = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfAbovegroundFloor = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfAccommodationUnits = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $numberOfApartment = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfNonResidentialUnits = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfParkingPlaces = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $numberOfPlot = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfRooms = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfTelephoneLines = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $numberOfUndergroundFloor = null;

	#[ORM\ManyToMany(targetEntity: Orientation::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_orientation')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'orientation_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $orientation;

	#[ORM\ManyToOne(targetEntity: Parking::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Parking $parking = null;

	#[ORM\ManyToMany(targetEntity: Parking::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_parking')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'parking_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $parkingMulti;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $pcNetLines = null;

	#[ORM\ManyToOne(targetEntity: PeriodOfChargesAndServices::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\PeriodOfChargesAndServices $periodOfChargesAndServices = null;

	#[ORM\ManyToOne(targetEntity: PeriodOfPrice::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\PeriodOfPrice $periodOfPrice = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $pets = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $petsComment = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $price = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $priceComment = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $priceCommentOthersLanguages = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $priceHistory = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $priceIncludeCommission = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $priceToNegotiation = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $priceWithChargesAndServices = null;

	#[ORM\ManyToOne(targetEntity: ProtectedLandscapeArea::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\ProtectedLandscapeArea $protectedLandscapeArea = null;

	#[ORM\ManyToMany(targetEntity: ProtectionZone::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_protection_zone')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'protection_zone_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $protectionZone;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $reception = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $registrationNumber = null;

	#[ORM\ManyToOne(targetEntity: RoadType::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\RoadType $roadType = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $security = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $share = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $shortTermLease = null;

	#[ORM\ManyToOne(targetEntity: SocialFacilities::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\SocialFacilities $socialFacilities = null;

	#[ORM\ManyToMany(targetEntity: SourceOfHotWater::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_source_of_hot_water')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'source_of_hot_water_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $sourceOfHotWater;

	#[ORM\ManyToOne(targetEntity: StatusOfCommission::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\StatusOfCommission $statusOfCommission = null;

	#[ORM\ManyToOne(targetEntity: StatusOfEstate::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\StatusOfEstate $statusOfEstate = null;

	#[ORM\ManyToOne(targetEntity: StructureOfBuilding::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\StructureOfBuilding $structureOfBuilding = null;

	#[ORM\ManyToOne(targetEntity: SubtypeOfRealEstate::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\SubtypeOfRealEstate $subtypeOfRealEstate = null;

	#[ORM\Column(type: 'float', nullable: true)]
	protected ?float $surety = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $telephoneConnector = null;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $terrace = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $title = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $titleOthersLanguages = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $totalOfFloor = null;

	#[ORM\ManyToMany(targetEntity: TransportAccessibility::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_estate_transport_accessibility')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'transport_acessibility_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $transportAccessibility;

	#[ORM\Column(type: 'boolean', nullable: true)]
	protected ?bool $turnkey = null;

	#[ORM\ManyToOne(targetEntity: TypeOfCommission::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfCommission $typeOfCommission = null;

	#[ORM\ManyToOne(targetEntity: TypeOfContract::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfContract $typeOfContract = null;

	#[ORM\ManyToOne(targetEntity: TypeOfChargesAndServices::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfChargesAndServices $typeOfChargesAndServices = null;

	#[ORM\ManyToOne(targetEntity: TypeOfOwnership::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfOwnership $typeOfOwnership = null;

	#[ORM\ManyToOne(targetEntity: TypeOfPrice::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfPrice $typeOfPrice = null;

	#[ORM\ManyToOne(targetEntity: TypeOfRealEstate::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstate $typeOfRealEstate = null;

	#[ORM\ManyToOne(targetEntity: TypeOfRealEstateCadastre::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstateCadastre $typeOfRealEstateCadastre = null;

	#[ORM\Column(type: 'string', nullable: true)]
	protected ?string $urlEstateDetail = null;

	#[ORM\ManyToOne(targetEntity: Utilisation::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Utilisation $utilisation = null;

	#[ORM\ManyToMany(targetEntity: UtilisationByLandUsePlanning::class, cascade: ['persist'])]
	#[ORM\JoinTable(name: 'realko_utilisation_by_land_use_planning')]
	#[ORM\JoinColumn(name: 'estate_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	#[ORM\InverseJoinColumn(name: 'utilisation_by_land_use_planning_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
	protected \Doctrine\Common\Collections\Collection $utilisationByLandUsePlanning;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $validityOfTreatyFrom = null;

	#[ORM\Column(type: 'datetime_immutable', nullable: true)]
	protected ?\DateTimeImmutable $validityOfTreatyTo = null;

	#[ORM\ManyToOne(targetEntity: Water::class)]
	#[ORM\JoinColumn(nullable: true, onDelete: 'CASCADE')]
	protected ?\Codebros\RealkoCommon\Domain\Entity\Water $water = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $yearOfConstruction = null;

	#[ORM\Column(type: 'integer', nullable: true)]
	protected ?int $yearOfRenovation = null;

	/**
	 * @param CharacterOfVillage[] $characterOfVillage
	 * @param Furniture[] $furniture
	 * @param Heating2[] $heating2
	 * @param Infrastructure[] $infrastructure
	 * @param Orientation[] $orientation
	 * @param Parking[] $parkingMulti
	 * @param ProtectionZone[] $protectionZone
	 * @param SourceOfHotWater[] $sourceOfHotWater
	 * @param TransportAccessibility[] $transportAccessibility
	 * @param UtilisationByLandUsePlanning[] $utilisationByLandUsePlanning
	 */
	public function __construct(
		int $externalId,
		int $version,
		array $photos = [],
		array $documents = [],
		array $externalDocuments = [],
		?\Codebros\RealkoCommon\Domain\Entity\AccessToLot $accessToLot = null,
		?bool $accommodation = null,
		?int $affiliateId = null,
		?int $agentId = null,
		?bool $alimentation = null,
		?float $annuity = null,
		?bool $apartmentInFamilyHouse = null,
		?float $areaBuiltUp = null,
		?float $areaFloor = null,
		?float $areaNonResidential = null,
		?float $areaOfBalcony = null,
		?float $areaOfCellar = null,
		?float $areaOfElevator = null,
		?float $areaOfGarden = null,
		?float $areaOfLoggia = null,
		?float $areaOfLot = null,
		?float $areaOfOffice = null,
		?float $areaOfSales = null,
		?float $areaOfStorage = null,
		?float $areaOfTerrace = null,
		?float $areaProduction = null,
		?float $areaUse = null,
		?bool $atypical = null,
		?\DateTimeImmutable $auctionDate = null,
		?\DateTimeImmutable $auctionDateTour = null,
		?\DateTimeImmutable $auctionDateTour2 = null,
		?\Codebros\RealkoCommon\Domain\Entity\AuctionKind $auctionKind = null,
		?string $auctionPlace = null,
		?float $auctionPriceExpertReport = null,
		?float $auctionPriceMinimumBid = null,
		?float $auctionPricePrincipal = null,
		?bool $balcony = null,
		?bool $blurLocationOnServers = null,
		?\Codebros\RealkoCommon\Domain\Entity\BuildingLien $buildingLien = null,
		?bool $cableTv = null,
		?\Codebros\RealkoCommon\Domain\Entity\Canalization $canalization = null,
		?int $capacityOfAlimentation = null,
		?float $ceilingHeight = null,
		?bool $cellar = null,
		?bool $cleaning = null,
		?float $clearCeilingHeight = null,
		?bool $constructionOnLot = null,
		?\Codebros\RealkoCommon\Domain\Entity\CoreOfApartment $coreOfApartment = null,
		?bool $crane = null,
		?int $craneLoad = null,
		?\Codebros\RealkoCommon\Domain\Entity\Currency $currency = null,
		?\DateTimeImmutable $dateOfCreation = null,
		?\DateTimeImmutable $dateOfStatusActive = null,
		?\DateTimeImmutable $dateOfStatusReservation = null,
		?\DateTimeImmutable $dateOfStatusRealized = null,
		?\DateTimeImmutable $dateOfUpdate = null,
		?string $description = null,
		?string $descriptionOtherslanguages = null,
		?\Codebros\RealkoCommon\Domain\Entity\Disposition $disposition = null,
		?string $divisionNumberOfPlot = null,
		?bool $dontAdvertisePrice = null,
		?bool $duplex = null,
		?\Codebros\RealkoCommon\Domain\Entity\EcologicalLoad $ecologicalLoad = null,
		?\Codebros\RealkoCommon\Domain\Entity\Electricity $electricity = null,
		?\Codebros\RealkoCommon\Domain\Entity\ElectricityOnLot $electricityOnLot = null,
		?bool $elevator = null,
		?int $elevatorLoad = null,
		?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceRating $energyPerformanceRating = null,
		?float $energyPerformanceSummary = null,
		?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceCertificate $energyPerformanceCertificate = null,
		?\Codebros\RealkoCommon\Domain\Entity\Floor $floor = null,
		?bool $foreigners = null,
		?string $foreignersComment = null,
		?\DateTimeImmutable $freeFrom = null,
		?bool $freeImmediately = null,
		?\Codebros\RealkoCommon\Domain\Entity\Furnished $furnished = null,
		array $furniture = [],
		?bool $garden = null,
		?\Codebros\RealkoCommon\Domain\Entity\Gas $gas = null,
		?string $gpsLat = null,
		?string $gpsLng = null,
		?\Codebros\RealkoCommon\Domain\Entity\Heating $heating = null,
		array $heating2 = [],
		?string $heatingComment = null,
		?string $householdAppliances = null,
		array $characterOfVillage = [],
		?float $chargesAndServices = null,
		?string $chargesAndServicesComment = null,
		?bool $children = null,
		array $infrastructure = [],
		?\Codebros\RealkoCommon\Domain\Entity\InternetConnection $internetConnection = null,
		?\Codebros\RealkoCommon\Domain\Entity\Category $category = null,
		?\Codebros\RealkoCommon\Domain\Entity\KindOfPlotNumbers $kindOfPlotNumbers = null,
		?bool $lastFloor = null,
		Location $location = null,
		?\Codebros\RealkoCommon\Domain\Entity\Locality $locality = null,
		?bool $loft = null,
		?bool $loggia = null,
		?int $maximumNumberOfPeople = null,
		?bool $meetingRoom = null,
		?string $minimumRentalPeriod = null,
		?bool $mortgage = null,
		?bool $multigenerational = null,
		?string $neighbouringObjects = null,
		?string $numberAndTypeOfHotelRooms = null,
		?int $numberOfAbovegroundFloor = null,
		?int $numberOfAccommodationUnits = null,
		?string $numberOfApartment = null,
		?int $numberOfNonResidentialUnits = null,
		?int $numberOfParkingPlaces = null,
		?string $numberOfPlot = null,
		?int $numberOfRooms = null,
		?int $numberOfTelephoneLines = null,
		?int $numberOfUndergroundFloor = null,
		array $orientation = [],
		?\Codebros\RealkoCommon\Domain\Entity\Parking $parking = null,
		array $parkingMulti = [],
		?bool $pcNetLines = null,
		?\Codebros\RealkoCommon\Domain\Entity\PeriodOfChargesAndServices $periodOfChargesAndServices = null,
		?\Codebros\RealkoCommon\Domain\Entity\PeriodOfPrice $periodOfPrice = null,
		?bool $pets = null,
		?string $petsComment = null,
		?float $price = null,
		?string $priceComment = null,
		?string $priceCommentOthersLanguages = null,
		?string $priceHistory = null,
		?bool $priceIncludeCommission = null,
		?bool $priceToNegotiation = null,
		?bool $priceWithChargesAndServices = null,
		?\Codebros\RealkoCommon\Domain\Entity\ProtectedLandscapeArea $protectedLandscapeArea = null,
		array $protectionZone = [],
		?bool $reception = null,
		?string $registrationNumber = null,
		?\Codebros\RealkoCommon\Domain\Entity\RoadType $roadType = null,
		?bool $security = null,
		?float $share = null,
		?bool $shortTermLease = null,
		?\Codebros\RealkoCommon\Domain\Entity\SocialFacilities $socialFacilities = null,
		array $sourceOfHotWater = [],
		?\Codebros\RealkoCommon\Domain\Entity\StatusOfCommission $statusOfCommission = null,
		?\Codebros\RealkoCommon\Domain\Entity\StatusOfEstate $statusOfEstate = null,
		?\Codebros\RealkoCommon\Domain\Entity\StructureOfBuilding $structureOfBuilding = null,
		?\Codebros\RealkoCommon\Domain\Entity\SubtypeOfRealEstate $subtypeOfRealEstate = null,
		?float $surety = null,
		?bool $telephoneConnector = null,
		?bool $terrace = null,
		?string $title = null,
		?string $titleOthersLanguages = null,
		?int $totalOfFloor = null,
		array $transportAccessibility = [],
		?bool $turnkey = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfCommission $typeOfCommission = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfContract $typeOfContract = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfChargesAndServices $typeOfChargesAndServices = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfOwnership $typeOfOwnership = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfPrice $typeOfPrice = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstate $typeOfRealEstate = null,
		?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstateCadastre $typeOfRealEstateCadastre = null,
		?string $urlEstateDetail = null,
		?\Codebros\RealkoCommon\Domain\Entity\Utilisation $utilisation = null,
		array $utilisationByLandUsePlanning = [],
		?\DateTimeImmutable $validityOfTreatyFrom = null,
		?\DateTimeImmutable $validityOfTreatyTo = null,
		?\Codebros\RealkoCommon\Domain\Entity\Water $water = null,
		?int $yearOfConstruction = null,
		?int $yearOfRenovation = null,
	)
	{
		$this->createdAt = new \DateTimeImmutable();
		$this->externalId = $externalId;
		$this->version = $version;
		$this->photos = new \Doctrine\Common\Collections\ArrayCollection($photos);
		$this->documents = new \Doctrine\Common\Collections\ArrayCollection($documents);
		$this->externalDocuments = new \Doctrine\Common\Collections\ArrayCollection($externalDocuments);
		$this->accessToLot = $accessToLot;
		$this->accommodation = $accommodation;
		$this->affiliateId = $affiliateId;
		$this->agentId = $agentId;
		$this->alimentation = $alimentation;
		$this->annuity = $annuity;
		$this->apartmentInFamilyHouse = $apartmentInFamilyHouse;
		$this->areaBuiltUp = $areaBuiltUp;
		$this->areaFloor = $areaFloor;
		$this->areaNonResidential = $areaNonResidential;
		$this->areaOfBalcony = $areaOfBalcony;
		$this->areaOfCellar = $areaOfCellar;
		$this->areaOfElevator = $areaOfElevator;
		$this->areaOfGarden = $areaOfGarden;
		$this->areaOfLoggia = $areaOfLoggia;
		$this->areaOfLot = $areaOfLot;
		$this->areaOfOffice = $areaOfOffice;
		$this->areaOfSales = $areaOfSales;
		$this->areaOfStorage = $areaOfStorage;
		$this->areaOfTerrace = $areaOfTerrace;
		$this->areaProduction = $areaProduction;
		$this->areaUse = $areaUse;
		$this->atypical = $atypical;
		$this->auctionDate = $auctionDate;
		$this->auctionDateTour = $auctionDateTour;
		$this->auctionDateTour2 = $auctionDateTour2;
		$this->auctionKind = $auctionKind;
		$this->auctionPlace = $auctionPlace;
		$this->auctionPriceExpertReport = $auctionPriceExpertReport;
		$this->auctionPriceMinimumBid = $auctionPriceMinimumBid;
		$this->auctionPricePrincipal = $auctionPricePrincipal;
		$this->balcony = $balcony;
		$this->blurLocationOnServers = $blurLocationOnServers;
		$this->buildingLien = $buildingLien;
		$this->cableTv = $cableTv;
		$this->canalization = $canalization;
		$this->capacityOfAlimentation = $capacityOfAlimentation;
		$this->ceilingHeight = $ceilingHeight;
		$this->cellar = $cellar;
		$this->cleaning = $cleaning;
		$this->clearCeilingHeight = $clearCeilingHeight;
		$this->constructionOnLot = $constructionOnLot;
		$this->coreOfApartment = $coreOfApartment;
		$this->crane = $crane;
		$this->craneLoad = $craneLoad;
		$this->currency = $currency;
		$this->dateOfCreation = $dateOfCreation;
		$this->dateOfStatusActive = $dateOfStatusActive;
		$this->dateOfStatusReservation = $dateOfStatusReservation;
		$this->dateOfStatusRealized = $dateOfStatusRealized;
		$this->dateOfUpdate = $dateOfUpdate;
		$this->description = $description;
		$this->descriptionOtherslanguages = $descriptionOtherslanguages;
		$this->disposition = $disposition;
		$this->divisionNumberOfPlot = $divisionNumberOfPlot;
		$this->dontAdvertisePrice = $dontAdvertisePrice;
		$this->duplex = $duplex;
		$this->ecologicalLoad = $ecologicalLoad;
		$this->electricity = $electricity;
		$this->electricityOnLot = $electricityOnLot;
		$this->elevator = $elevator;
		$this->elevatorLoad = $elevatorLoad;
		$this->energyPerformanceRating = $energyPerformanceRating;
		$this->energyPerformanceSummary = $energyPerformanceSummary;
		$this->energyPerformanceCertificate = $energyPerformanceCertificate;
		$this->floor = $floor;
		$this->foreigners = $foreigners;
		$this->foreignersComment = $foreignersComment;
		$this->freeFrom = $freeFrom;
		$this->freeImmediately = $freeImmediately;
		$this->furnished = $furnished;
		$this->furniture = new \Doctrine\Common\Collections\ArrayCollection($furniture);
		$this->garden = $garden;
		$this->gas = $gas;
		$this->gpsLat = $gpsLat;
		$this->gpsLng = $gpsLng;
		$this->heating = $heating;
		\array_map(function($row) { $row->setEstate($this); }, $heating2);
		$this->heating2 = new \Doctrine\Common\Collections\ArrayCollection($heating2);
		$this->heatingComment = $heatingComment;
		$this->householdAppliances = $householdAppliances;
		$this->characterOfVillage = new \Doctrine\Common\Collections\ArrayCollection($characterOfVillage);
		$this->chargesAndServices = $chargesAndServices;
		$this->chargesAndServicesComment = $chargesAndServicesComment;
		$this->children = $children;
		$this->infrastructure = new \Doctrine\Common\Collections\ArrayCollection($infrastructure);
		$this->internetConnection = $internetConnection;
		$this->category = $category;
		$this->kindOfPlotNumbers = $kindOfPlotNumbers;
		$this->lastFloor = $lastFloor;
		$this->location = $location;
		$this->locality = $locality;
		$this->loft = $loft;
		$this->loggia = $loggia;
		$this->maximumNumberOfPeople = $maximumNumberOfPeople;
		$this->meetingRoom = $meetingRoom;
		$this->minimumRentalPeriod = $minimumRentalPeriod;
		$this->mortgage = $mortgage;
		$this->multigenerational = $multigenerational;
		$this->neighbouringObjects = $neighbouringObjects;
		$this->numberAndTypeOfHotelRooms = $numberAndTypeOfHotelRooms;
		$this->numberOfAbovegroundFloor = $numberOfAbovegroundFloor;
		$this->numberOfAccommodationUnits = $numberOfAccommodationUnits;
		$this->numberOfApartment = $numberOfApartment;
		$this->numberOfNonResidentialUnits = $numberOfNonResidentialUnits;
		$this->numberOfParkingPlaces = $numberOfParkingPlaces;
		$this->numberOfPlot = $numberOfPlot;
		$this->numberOfRooms = $numberOfRooms;
		$this->numberOfTelephoneLines = $numberOfTelephoneLines;
		$this->numberOfUndergroundFloor = $numberOfUndergroundFloor;
		$this->orientation = new \Doctrine\Common\Collections\ArrayCollection($orientation);
		$this->parking = $parking;
		$this->parkingMulti = new \Doctrine\Common\Collections\ArrayCollection($parkingMulti);
		$this->pcNetLines = $pcNetLines;
		$this->periodOfChargesAndServices = $periodOfChargesAndServices;
		$this->periodOfPrice = $periodOfPrice;
		$this->pets = $pets;
		$this->petsComment = $petsComment;
		$this->price = $price;
		$this->priceComment = $priceComment;
		$this->priceCommentOthersLanguages = $priceCommentOthersLanguages;
		$this->priceHistory = $priceHistory;
		$this->priceIncludeCommission = $priceIncludeCommission;
		$this->priceToNegotiation = $priceToNegotiation;
		$this->priceWithChargesAndServices = $priceWithChargesAndServices;
		$this->protectedLandscapeArea = $protectedLandscapeArea;
		$this->protectionZone = new \Doctrine\Common\Collections\ArrayCollection($protectionZone);
		$this->reception = $reception;
		$this->registrationNumber = $registrationNumber;
		$this->roadType = $roadType;
		$this->security = $security;
		$this->share = $share;
		$this->shortTermLease = $shortTermLease;
		$this->socialFacilities = $socialFacilities;
		$this->sourceOfHotWater = new \Doctrine\Common\Collections\ArrayCollection($sourceOfHotWater);
		$this->statusOfCommission = $statusOfCommission;
		$this->statusOfEstate = $statusOfEstate;
		$this->structureOfBuilding = $structureOfBuilding;
		$this->subtypeOfRealEstate = $subtypeOfRealEstate;
		$this->surety = $surety;
		$this->telephoneConnector = $telephoneConnector;
		$this->terrace = $terrace;
		$this->title = $title;
		$this->titleOthersLanguages = $titleOthersLanguages;
		$this->totalOfFloor = $totalOfFloor;
		$this->transportAccessibility = new \Doctrine\Common\Collections\ArrayCollection($transportAccessibility);
		$this->turnkey = $turnkey;
		$this->typeOfCommission = $typeOfCommission;
		$this->typeOfContract = $typeOfContract;
		$this->typeOfChargesAndServices = $typeOfChargesAndServices;
		$this->typeOfOwnership = $typeOfOwnership;
		$this->typeOfPrice = $typeOfPrice;
		$this->typeOfRealEstate = $typeOfRealEstate;
		$this->typeOfRealEstateCadastre = $typeOfRealEstateCadastre;
		$this->urlEstateDetail = $urlEstateDetail;
		$this->utilisation = $utilisation;
		$this->utilisationByLandUsePlanning = new \Doctrine\Common\Collections\ArrayCollection($utilisationByLandUsePlanning);
		$this->validityOfTreatyFrom = $validityOfTreatyFrom;
		$this->validityOfTreatyTo = $validityOfTreatyTo;
		$this->water = $water;
		$this->yearOfConstruction = $yearOfConstruction;
		$this->yearOfRenovation = $yearOfRenovation;
	}

	public function id(): \Ramsey\Uuid\UuidInterface
	{
		return $this->id;
	}

	public function uuid(): \Ramsey\Uuid\UuidInterface
	{
		return $this->id;
	}

	public function externalId(): int
	{
		return $this->externalId;
	}

	public function version(): int
	{
		return $this->version;
	}

	/**
	 * @return Document[]
	 */
	public function getPhotos(): array
	{
		return $this->photos->toArray();
	}

	/**
	 * @return Document[]
	 */
	public function getDocuments(): array
	{
		return $this->documents->toArray();
	}

	/**
	 * @return Document[]
	 */
	public function getExternalDocuments(): array
	{
		return $this->externalDocuments->toArray();
	}

	public function accessToLot(): ?\Codebros\RealkoCommon\Domain\Entity\AccessToLot
	{
		return $this->accessToLot;
	}

	public function accommodation(): ?bool
	{
		return $this->accommodation;
	}

	public function affiliateId(): ?int
	{
		return $this->affiliateId;
	}

	public function agentId(): ?int
	{
		return $this->agentId;
	}

	public function alimentation(): ?bool
	{
		return $this->alimentation;
	}

	public function annuity(): ?float
	{
		return $this->annuity;
	}

	public function apartmentInFamilyHouse(): ?bool
	{
		return $this->apartmentInFamilyHouse;
	}

	public function areaBuiltUp(): ?float
	{
		return $this->areaBuiltUp;
	}

	public function areaFloor(): ?float
	{
		return $this->areaFloor;
	}

	public function areaNonResidential(): ?float
	{
		return $this->areaNonResidential;
	}

	public function areaOfBalcony(): ?float
	{
		return $this->areaOfBalcony;
	}

	public function areaOfCellar(): ?float
	{
		return $this->areaOfCellar;
	}

	public function areaOfElevator(): ?float
	{
		return $this->areaOfElevator;
	}

	public function areaOfGarden(): ?float
	{
		return $this->areaOfGarden;
	}

	public function areaOfLoggia(): ?float
	{
		return $this->areaOfLoggia;
	}

	public function areaOfLot(): ?float
	{
		return $this->areaOfLot;
	}

	public function areaOfOffice(): ?float
	{
		return $this->areaOfOffice;
	}

	public function areaOfSales(): ?float
	{
		return $this->areaOfSales;
	}

	public function areaOfStorage(): ?float
	{
		return $this->areaOfStorage;
	}

	public function areaOfTerrace(): ?float
	{
		return $this->areaOfTerrace;
	}

	public function areaProduction(): ?float
	{
		return $this->areaProduction;
	}

	public function areaUse(): ?float
	{
		return $this->areaUse;
	}

	public function atypical(): ?bool
	{
		return $this->atypical;
	}

	public function auctionDate(): ?\DateTimeImmutable
	{
		return $this->auctionDate;
	}

	public function auctionDateTour(): ?\DateTimeImmutable
	{
		return $this->auctionDateTour;
	}

	public function auctionDateTour2(): ?\DateTimeImmutable
	{
		return $this->auctionDateTour2;
	}

	public function auctionKind(): ?\Codebros\RealkoCommon\Domain\Entity\AuctionKind
	{
		return $this->auctionKind;
	}

	public function auctionPlace(): ?string
	{
		return $this->auctionPlace;
	}

	public function auctionPriceExpertReport(): ?float
	{
		return $this->auctionPriceExpertReport;
	}

	public function auctionPriceMinimumBid(): ?float
	{
		return $this->auctionPriceMinimumBid;
	}

	public function auctionPricePrincipal(): ?float
	{
		return $this->auctionPricePrincipal;
	}

	public function balcony(): ?bool
	{
		return $this->balcony;
	}

	public function blurLocationOnServers(): ?bool
	{
		return $this->blurLocationOnServers;
	}

	public function buildingLien(): ?\Codebros\RealkoCommon\Domain\Entity\BuildingLien
	{
		return $this->buildingLien;
	}

	public function cableTv(): ?bool
	{
		return $this->cableTv;
	}

	public function canalization(): ?\Codebros\RealkoCommon\Domain\Entity\Canalization
	{
		return $this->canalization;
	}

	public function capacityOfAlimentation(): ?int
	{
		return $this->capacityOfAlimentation;
	}

	public function ceilingHeight(): ?float
	{
		return $this->ceilingHeight;
	}

	public function cellar(): ?bool
	{
		return $this->cellar;
	}

	public function cleaning(): ?bool
	{
		return $this->cleaning;
	}

	public function clearCeilingHeight(): ?float
	{
		return $this->clearCeilingHeight;
	}

	public function constructionOnLot(): ?bool
	{
		return $this->constructionOnLot;
	}

	public function coreOfApartment(): ?\Codebros\RealkoCommon\Domain\Entity\CoreOfApartment
	{
		return $this->coreOfApartment;
	}

	public function crane(): ?bool
	{
		return $this->crane;
	}

	public function craneLoad(): ?int
	{
		return $this->craneLoad;
	}

	public function currency(): ?\Codebros\RealkoCommon\Domain\Entity\Currency
	{
		return $this->currency;
	}

	public function dateOfCreation(): ?\DateTimeImmutable
	{
		return $this->dateOfCreation;
	}

	public function dateOfStatusActive(): ?\DateTimeImmutable
	{
		return $this->dateOfStatusActive;
	}

	public function dateOfStatusReservation(): ?\DateTimeImmutable
	{
		return $this->dateOfStatusReservation;
	}

	public function dateOfStatusRealized(): ?\DateTimeImmutable
	{
		return $this->dateOfStatusRealized;
	}

	public function dateOfUpdate(): ?\DateTimeImmutable
	{
		return $this->dateOfUpdate;
	}

	public function description(): ?string
	{
		return $this->description;
	}

	public function descriptionOtherslanguages(): ?string
	{
		return $this->descriptionOtherslanguages;
	}

	public function disposition(): ?\Codebros\RealkoCommon\Domain\Entity\Disposition
	{
		return $this->disposition;
	}

	public function divisionNumberOfPlot(): ?string
	{
		return $this->divisionNumberOfPlot;
	}

	public function dontAdvertisePrice(): ?bool
	{
		return $this->dontAdvertisePrice;
	}

	public function duplex(): ?bool
	{
		return $this->duplex;
	}

	public function ecologicalLoad(): ?\Codebros\RealkoCommon\Domain\Entity\EcologicalLoad
	{
		return $this->ecologicalLoad;
	}

	public function electricity(): ?\Codebros\RealkoCommon\Domain\Entity\Electricity
	{
		return $this->electricity;
	}

	public function electricityOnLot(): ?\Codebros\RealkoCommon\Domain\Entity\ElectricityOnLot
	{
		return $this->electricityOnLot;
	}

	public function elevator(): ?bool
	{
		return $this->elevator;
	}

	public function elevatorLoad(): ?int
	{
		return $this->elevatorLoad;
	}

	public function energyPerformanceRating(): ?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceRating
	{
		return $this->energyPerformanceRating;
	}

	public function energyPerformanceSummary(): ?float
	{
		return $this->energyPerformanceSummary;
	}

	public function energyPerformanceCertificate(): ?\Codebros\RealkoCommon\Domain\Entity\EnergyPerformanceCertificate
	{
		return $this->energyPerformanceCertificate;
	}

	public function floor(): ?\Codebros\RealkoCommon\Domain\Entity\Floor
	{
		return $this->floor;
	}

	public function foreigners(): ?bool
	{
		return $this->foreigners;
	}

	public function foreignersComment(): ?string
	{
		return $this->foreignersComment;
	}

	public function freeFrom(): ?\DateTimeImmutable
	{
		return $this->freeFrom;
	}

	public function freeImmediately(): ?bool
	{
		return $this->freeImmediately;
	}

	public function furnished(): ?\Codebros\RealkoCommon\Domain\Entity\Furnished
	{
		return $this->furnished;
	}

	public function furniture(): \Doctrine\Common\Collections\Collection
	{
		return $this->furniture;
	}

	public function garden(): ?bool
	{
		return $this->garden;
	}

	public function gas(): ?\Codebros\RealkoCommon\Domain\Entity\Gas
	{
		return $this->gas;
	}

	public function gpsLat(): ?string
	{
		return $this->gpsLat;
	}

	public function gpsLng(): ?string
	{
		return $this->gpsLng;
	}

	public function heating(): ?\Codebros\RealkoCommon\Domain\Entity\Heating
	{
		return $this->heating;
	}

	public function heating2(): \Doctrine\Common\Collections\Collection
	{
		return $this->heating2;
	}

	public function heatingComment(): ?string
	{
		return $this->heatingComment;
	}

	public function householdAppliances(): ?string
	{
		return $this->householdAppliances;
	}

	public function characterOfVillage(): \Doctrine\Common\Collections\Collection
	{
		return $this->characterOfVillage;
	}

	public function chargesAndServices(): ?float
	{
		return $this->chargesAndServices;
	}

	public function chargesAndServicesComment(): ?string
	{
		return $this->chargesAndServicesComment;
	}

	public function children(): ?bool
	{
		return $this->children;
	}

	public function infrastructure(): \Doctrine\Common\Collections\Collection
	{
		return $this->infrastructure;
	}

	public function internetConnection(): ?\Codebros\RealkoCommon\Domain\Entity\InternetConnection
	{
		return $this->internetConnection;
	}

	public function category(): ?\Codebros\RealkoCommon\Domain\Entity\Category
	{
		return $this->category;
	}

	public function kindOfPlotNumbers(): ?\Codebros\RealkoCommon\Domain\Entity\KindOfPlotNumbers
	{
		return $this->kindOfPlotNumbers;
	}

	public function lastFloor(): ?bool
	{
		return $this->lastFloor;
	}

	public function location(): ?Location
	{
		return $this->location;
	}

	public function locality(): ?\Codebros\RealkoCommon\Domain\Entity\Locality
	{
		return $this->locality;
	}

	public function loft(): ?bool
	{
		return $this->loft;
	}

	public function loggia(): ?bool
	{
		return $this->loggia;
	}

	public function maximumNumberOfPeople(): ?int
	{
		return $this->maximumNumberOfPeople;
	}

	public function meetingRoom(): ?bool
	{
		return $this->meetingRoom;
	}

	public function minimumRentalPeriod(): ?string
	{
		return $this->minimumRentalPeriod;
	}

	public function mortgage(): ?bool
	{
		return $this->mortgage;
	}

	public function multigenerational(): ?bool
	{
		return $this->multigenerational;
	}

	public function neighbouringObjects(): ?string
	{
		return $this->neighbouringObjects;
	}

	public function numberAndTypeOfHotelRooms(): ?string
	{
		return $this->numberAndTypeOfHotelRooms;
	}

	public function numberOfAbovegroundFloor(): ?int
	{
		return $this->numberOfAbovegroundFloor;
	}

	public function numberOfAccommodationUnits(): ?int
	{
		return $this->numberOfAccommodationUnits;
	}

	public function numberOfApartment(): ?string
	{
		return $this->numberOfApartment;
	}

	public function numberOfNonResidentialUnits(): ?int
	{
		return $this->numberOfNonResidentialUnits;
	}

	public function numberOfParkingPlaces(): ?int
	{
		return $this->numberOfParkingPlaces;
	}

	public function numberOfPlot(): ?string
	{
		return $this->numberOfPlot;
	}

	public function numberOfRooms(): ?int
	{
		return $this->numberOfRooms;
	}

	public function numberOfTelephoneLines(): ?int
	{
		return $this->numberOfTelephoneLines;
	}

	public function numberOfUndergroundFloor(): ?int
	{
		return $this->numberOfUndergroundFloor;
	}

	public function orientation(): \Doctrine\Common\Collections\Collection
	{
		return $this->orientation;
	}

	public function parking(): ?\Codebros\RealkoCommon\Domain\Entity\Parking
	{
		return $this->parking;
	}

	public function parkingMulti(): \Doctrine\Common\Collections\Collection
	{
		return $this->parkingMulti;
	}

	public function pcNetLines(): ?bool
	{
		return $this->pcNetLines;
	}

	public function periodOfChargesAndServices(): ?\Codebros\RealkoCommon\Domain\Entity\PeriodOfChargesAndServices
	{
		return $this->periodOfChargesAndServices;
	}

	public function periodOfPrice(): ?\Codebros\RealkoCommon\Domain\Entity\PeriodOfPrice
	{
		return $this->periodOfPrice;
	}

	public function pets(): ?bool
	{
		return $this->pets;
	}

	public function petsComment(): ?string
	{
		return $this->petsComment;
	}

	public function price(): ?float
	{
		return $this->price;
	}

	public function priceComment(): ?string
	{
		return $this->priceComment;
	}

	public function priceCommentOthersLanguages(): ?string
	{
		return $this->priceCommentOthersLanguages;
	}

	public function priceHistory(): ?string
	{
		return $this->priceHistory;
	}

	public function priceIncludeCommission(): ?bool
	{
		return $this->priceIncludeCommission;
	}

	public function priceToNegotiation(): ?bool
	{
		return $this->priceToNegotiation;
	}

	public function priceWithChargesAndServices(): ?bool
	{
		return $this->priceWithChargesAndServices;
	}

	public function protectedLandscapeArea(): ?\Codebros\RealkoCommon\Domain\Entity\ProtectedLandscapeArea
	{
		return $this->protectedLandscapeArea;
	}

	public function protectionZone(): \Doctrine\Common\Collections\Collection
	{
		return $this->protectionZone;
	}

	public function reception(): ?bool
	{
		return $this->reception;
	}

	public function registrationNumber(): ?string
	{
		return $this->registrationNumber;
	}

	public function roadType(): ?\Codebros\RealkoCommon\Domain\Entity\RoadType
	{
		return $this->roadType;
	}

	public function security(): ?bool
	{
		return $this->security;
	}

	public function share(): ?float
	{
		return $this->share;
	}

	public function shortTermLease(): ?bool
	{
		return $this->shortTermLease;
	}

	public function socialFacilities(): ?\Codebros\RealkoCommon\Domain\Entity\SocialFacilities
	{
		return $this->socialFacilities;
	}

	public function sourceOfHotWater(): \Doctrine\Common\Collections\Collection
	{
		return $this->sourceOfHotWater;
	}

	public function statusOfCommission(): ?\Codebros\RealkoCommon\Domain\Entity\StatusOfCommission
	{
		return $this->statusOfCommission;
	}

	public function statusOfEstate(): ?\Codebros\RealkoCommon\Domain\Entity\StatusOfEstate
	{
		return $this->statusOfEstate;
	}

	public function structureOfBuilding(): ?\Codebros\RealkoCommon\Domain\Entity\StructureOfBuilding
	{
		return $this->structureOfBuilding;
	}

	public function subtypeOfRealEstate(): ?\Codebros\RealkoCommon\Domain\Entity\SubtypeOfRealEstate
	{
		return $this->subtypeOfRealEstate;
	}

	public function surety(): ?float
	{
		return $this->surety;
	}

	public function telephoneConnector(): ?bool
	{
		return $this->telephoneConnector;
	}

	public function terrace(): ?bool
	{
		return $this->terrace;
	}

	public function title(): ?string
	{
		return $this->title;
	}

	public function titleOthersLanguages(): ?string
	{
		return $this->titleOthersLanguages;
	}

	public function totalOfFloor(): ?int
	{
		return $this->totalOfFloor;
	}

	public function transportAccessibility(): \Doctrine\Common\Collections\Collection
	{
		return $this->transportAccessibility;
	}

	public function turnkey(): ?bool
	{
		return $this->turnkey;
	}

	public function typeOfCommission(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfCommission
	{
		return $this->typeOfCommission;
	}

	public function typeOfContract(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfContract
	{
		return $this->typeOfContract;
	}

	public function typeOfChargesAndServices(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfChargesAndServices
	{
		return $this->typeOfChargesAndServices;
	}

	public function typeOfOwnership(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfOwnership
	{
		return $this->typeOfOwnership;
	}

	public function typeOfPrice(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfPrice
	{
		return $this->typeOfPrice;
	}

	public function typeOfRealEstate(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstate
	{
		return $this->typeOfRealEstate;
	}

	public function typeOfRealEstateCadastre(): ?\Codebros\RealkoCommon\Domain\Entity\TypeOfRealEstateCadastre
	{
		return $this->typeOfRealEstateCadastre;
	}

	public function urlEstateDetail(): ?string
	{
		return $this->urlEstateDetail;
	}

	public function utilisation(): ?\Codebros\RealkoCommon\Domain\Entity\Utilisation
	{
		return $this->utilisation;
	}

	public function utilisationByLandUsePlanning(): \Doctrine\Common\Collections\Collection
	{
		return $this->utilisationByLandUsePlanning;
	}

	public function validityOfTreatyFrom(): ?\DateTimeImmutable
	{
		return $this->validityOfTreatyFrom;
	}

	public function validityOfTreatyTo(): ?\DateTimeImmutable
	{
		return $this->validityOfTreatyTo;
	}

	public function water(): ?\Codebros\RealkoCommon\Domain\Entity\Water
	{
		return $this->water;
	}

	public function yearOfConstruction(): ?int
	{
		return $this->yearOfConstruction;
	}

	public function yearOfRenovation(): ?int
	{
		return $this->yearOfRenovation;
	}

	public function createdAt(): ?\DateTimeImmutable
	{
		return $this->createdAt;
	}

	public function deletedAt(): ?\DateTimeImmutable
	{
		return $this->deletedAt;
	}

	public function delete(): void
	{
		$this->deletedAt = new \DateTimeImmutable();
	}

	public function isDeleted(): bool
	{
		return $this->deletedAt !== null;
	}

}
