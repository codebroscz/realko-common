<?php declare(strict_types=1);

namespace Codebros\RealkoCommon\Domain\Converter;

/**
 * @template-implements DomainConverter<\Codebros\RealkoCommon\Domain\Entity\Estate>
 */
class EstateConverter implements DomainConverter
{

	private const EMPTY = [
		'accessToLot' => null,
		'accommodation' => null,
		'affiliateId' => null,
		'agentId' => null,
		'alimentation' => null,
		'annuity' => null,
		'apartmentInFamilyHouse' => null,
		'areaBuiltUp' => null,
		'areaFloor' => null,
		'areaNonResidential' => null,
		'areaOfBalcony' => null,
		'areaOfCellar' => null,
		'areaOfElevator' => null,
		'areaOfGarden' => null,
		'areaOfLoggia' => null,
		'areaOfLot' => null,
		'areaOfOffice' => null,
		'areaOfSales' => null,
		'areaOfStorage' => null,
		'areaOfTerrace' => null,
		'areaProduction' => null,
		'areaUse' => null,
		'atypical' => null,
		'auctionDate' => null,
		'auctionDateTour' => null,
		'auctionDateTour2' => null,
		'auctionKind' => null,
		'auctionPlace' => null,
		'auctionPriceExpertReport' => null,
		'auctionPriceMinimumBid' => null,
		'auctionPricePrincipal' => null,
		'balcony' => null,
		'blurLocationOnServers' => null,
		'buildingLien' => null,
		'cableTv' => null,
		'canalization' => null,
		'capacityOfAlimentation' => null,
		'ceilingHeight' => null,
		'cellar' => null,
		'cleaning' => null,
		'clearCeilingHeight' => null,
		'constructionOnLot' => null,
		'coreOfApartment' => null,
		'crane' => null,
		'craneLoad' => null,
		'currency' => null,
		'dateOfCreation' => null,
		'dateOfStatusActive' => null,
		'dateOfStatusReservation' => null,
		'dateOfStatusRealized' => null,
		'dateOfUpdate' => null,
		'description' => null,
		'disposition' => null,
		'divisionNumberOfPlot' => null,
        'documents' => [],
		'dontAdvertisePrice' => null,
		'duplex' => null,
		'ecologicalLoad' => null,
		'electricity' => null,
		'electricityOnLot' => null,
		'elevator' => null,
		'elevatorLoad' => null,
		'energyPerformanceRating' => null,
		'energyPerformanceSummary' => null,
		'energyPerformanceCertificate' => null,
        'externalDocuments' => [],
		'floor' => null,
		'foreigners' => null,
		'foreignersComment' => null,
		'freeFrom' => null,
		'freeImmediately' => null,
		'furnished' => null,
		'furniture' => [],
		'garden' => null,
		'gas' => null,
		'gpsLat' => null,
		'gpsLng' => null,
		'heating' => null,
		'heating2' => [],
		'heatingComment' => null,
		'householdAppliances' => null,
		'characterOfVillage' => [],
		'chargesAndServices' => null,
		'chargesAndServicesComment' => null,
		'children' => null,
		'infrastructure' => [],
		'internetConnection' => null,
		'category' => null,
		'kindOfPlotNumbers' => null,
		'lastFloor' => null,
		'location' => null,
		'locality' => null,
		'loft' => null,
		'loggia' => null,
		'maximumNumberOfPeople' => null,
		'meetingRoom' => null,
		'minimumRentalPeriod' => null,
		'mortgage' => null,
		'multigenerational' => null,
		'neighbouringObjects' => null,
		'numberAndTypeOfHotelRooms' => null,
		'numberOfAbovegroundFloor' => null,
		'numberOfAccommodationUnits' => null,
		'numberOfApartment' => null,
		'numberOfNonResidentialUnits' => null,
		'numberOfParkingPlaces' => null,
		'numberOfPlot' => null,
		'numberOfRooms' => null,
		'numberOfTelephoneLines' => null,
		'numberOfUndergroundFloor' => null,
		'orientation' => [],
		'parking' => null,
		'parkingMulti' => [],
		'pcNetLines' => null,
		'periodOfChargesAndServices' => null,
		'periodOfPrice' => null,
		'pets' => null,
		'petsComment' => null,
        'photos' => [],
		'price' => null,
		'priceComment' => null,
		'priceHistory' => null,
		'priceIncludeCommission' => null,
		'priceToNegotiation' => null,
		'priceWithChargesAndServices' => null,
		'protectedLandscapeArea' => null,
		'protectionZone' => [],
		'reception' => null,
		'registrationNumber' => null,
		'roadType' => null,
		'security' => null,
		'share' => null,
		'shortTermLease' => null,
		'socialFacilities' => null,
		'sourceOfHotWater' => [],
		'stamp' => null,
		'statusOfCommission' => null,
		'statusOfEstate' => null,
		'structureOfBuilding' => null,
		'subtypeOfRealEstate' => null,
		'surety' => null,
		'telephoneConnector' => null,
		'terrace' => null,
		'title' => null,
		'totalOfFloor' => null,
		'transportAccessibility' => [],
		'turnkey' => null,
		'typeOfCommission' => null,
		'typeOfContract' => null,
		'typeOfChargesAndServices' => null,
		'typeOfOwnership' => null,
		'typeOfPrice' => null,
		'typeOfRealEstate' => null,
		'typeOfRealEstateCadastre' => null,
		'urlEstateDetail' => null,
		'utilisation' => null,
		'utilisationByLandUsePlanning' => [],
		'validityOfTreatyFrom' => null,
		'validityOfTreatyTo' => null,
		'water' => null,
		'yearOfConstruction' => null,
		'yearOfRenovation' => null,
	];

	public function __construct(
		private readonly \Codebros\RealkoCommon\Domain\Converter\DocumentConverter $documentConverter,
		private readonly \Codebros\RealkoCommon\Domain\Converter\ExternalDocumentConverter $externalDocumentConverter,
		private readonly \Codebros\RealkoCommon\Domain\Converter\LocationConverter $locationConverter,
		private readonly \Codebros\RealkoCommon\Domain\Repository\EnumerationsRepository $enumerationsRepository,
	)
	{
	}

	/**
	 * @param \Codebros\RealkoCommon\Domain\Entity\Estate $object
	 */
	public function toArray(object $object): array
	{
		return [
			'id' => $object->externalId(),
			'accessToLot' => $object->accessToLot()?->toArray(),
			'accommodation' => $object->accommodation(),
			'affiliateId' => $object->affiliateId(),
			'agentId' => $object->agentId(),
			'alimentation' => $object->alimentation(),
			'annuity' => $object->annuity(),
			'apartmentInFamilyHouse' => $object->apartmentInFamilyHouse(),
			'areaBuiltUp' => $object->areaBuiltUp(),
			'areaFloor' => $object->areaFloor(),
			'areaNonResidential' => $object->areaNonResidential(),
			'areaOfBalcony' => $object->areaOfBalcony(),
			'areaOfCellar' => $object->areaOfCellar(),
			'areaOfElevator' => $object->areaOfElevator(),
			'areaOfGarden' => $object->areaOfGarden(),
			'areaOfLoggia' => $object->areaOfLoggia(),
			'areaOfLot' => $object->areaOfLot(),
			'areaOfOffice' => $object->areaOfOffice(),
			'areaOfSales' => $object->areaOfSales(),
			'areaOfStorage' => $object->areaOfStorage(),
			'areaOfTerrace' => $object->areaOfTerrace(),
			'areaProduction' => $object->areaProduction(),
			'areaUse' => $object->areaUse(),
			'atypical' => $object->atypical(),
			'auctionDate' => $object->auctionDate()?->format('c'),
			'auctionDateTour' => $object->auctionDateTour()?->format('c'),
			'auctionDateTour2' => $object->auctionDateTour2()?->format('c'),
			'auctionKind' => $object->auctionKind()?->toArray(),
			'auctionPlace' => $object->auctionPlace(),
			'auctionPriceExpertReport' => $object->auctionPriceExpertReport(),
			'auctionPriceMinimumBid' => $object->auctionPriceMinimumBid(),
			'auctionPricePrincipal' => $object->auctionPricePrincipal(),
			'balcony' => $object->balcony(),
			'blurLocationOnServers' => $object->blurLocationOnServers(),
			'buildingLien' => $object->buildingLien()?->toArray(),
			'cableTv' => $object->cableTv(),
			'canalization' => $object->canalization()?->toArray(),
			'capacityOfAlimentation' => $object->capacityOfAlimentation(),
			'ceilingHeight' => $object->ceilingHeight(),
			'cellar' => $object->cellar(),
			'cleaning' => $object->cleaning(),
			'clearCeilingHeight' => $object->clearCeilingHeight(),
			'constructionOnLot' => $object->constructionOnLot(),
			'coreOfApartment' => $object->coreOfApartment()?->toArray(),
			'crane' => $object->crane(),
			'craneLoad' => $object->craneLoad(),
			'currency' => $object->currency()?->toArray(),
			'dateOfCreation' => $object->dateOfCreation()?->format('c'),
			'dateOfStatusActive' => $object->dateOfStatusActive()?->format('c'),
			'dateOfStatusReservation' => $object->dateOfStatusReservation()?->format('c'),
			'dateOfStatusRealized' => $object->dateOfStatusRealized()?->format('c'),
			'dateOfUpdate' => $object->dateOfUpdate()?->format('c'),
			'description' => $object->description(),
			'disposition' => $object->disposition()?->toArray(),
			'divisionNumberOfPlot' => $object->divisionNumberOfPlot(),
			'documents' => \array_map([$this->documentConverter, 'toArray'], $object->getDocuments()),
			'dontAdvertisePrice' => $object->dontAdvertisePrice(),
			'duplex' => $object->duplex(),
			'ecologicalLoad' => $object->ecologicalLoad()?->toArray(),
			'electricity' => $object->electricity()?->toArray(),
			'electricityOnLot' => $object->electricityOnLot()?->toArray(),
			'elevator' => $object->elevator(),
			'elevatorLoad' => $object->elevatorLoad(),
			'energyPerformanceRating' => $object->energyPerformanceRating()?->toArray(),
			'energyPerformanceSummary' => $object->energyPerformanceSummary(),
			'energyPerformanceCertificate' => $object->energyPerformanceCertificate()?->toArray(),
			'externalDocuments' => \array_map([$this->externalDocumentConverter, 'toArray'], $object->getExternalDocuments()),
			'floor' => $object->floor()?->toArray(),
			'foreigners' => $object->foreigners(),
			'foreignersComment' => $object->foreignersComment(),
			'freeFrom' => $object->freeFrom()?->format('c'),
			'freeImmediately' => $object->freeImmediately(),
			'furnished' => $object->furnished()?->toArray(),
			'furniture' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Furniture $row): array => $row->toArray(), $object->furniture()->toArray()),
			'garden' => $object->garden(),
			'gas' => $object->gas()?->toArray(),
			'gpsLat' => $object->gpsLat(),
			'gpsLng' => $object->gpsLng(),
			'heating' => $object->heating()?->toArray(),
			'heating2' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Heating2 $heating): array => [
				'locationSource' => $heating->locationSource()?->toArray(),
				'source' => $heating->source()?->toArray(),
				'heatingElement' => $heating->heatingElement()?->toArray(),
			], $object->heating2()->toArray()),
			'heatingComment' => $object->heatingComment(),
			'householdAppliances' => $object->householdAppliances(),
			'characterOfVillage' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage $row): array => $row->toArray(), $object->characterOfVillage()->toArray()),
			'chargesAndServices' => $object->chargesAndServices(),
			'chargesAndServicesComment' => $object->chargesAndServicesComment(),
			'children' => $object->children(),
			'infrastructure' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Infrastructure $row): array => $row->toArray(), $object->infrastructure()->toArray()),
			'internetConnection' => $object->internetConnection()?->toArray(),
			'category' => $object->category()?->toArray(),
			'kindOfPlotNumbers' => $object->kindOfPlotNumbers()?->toArray(),
			'lastFloor' => $object->lastFloor(),
			'location' => $object->location() ? $this->locationConverter->toArray($object->location()) : null,
			'locality' => $object->locality()?->toArray(),
			'loft' => $object->loft(),
			'loggia' => $object->loggia(),
			'maximumNumberOfPeople' => $object->maximumNumberOfPeople(),
			'meetingRoom' => $object->meetingRoom(),
			'minimumRentalPeriod' => $object->minimumRentalPeriod(),
			'mortgage' => $object->mortgage(),
			'multigenerational' => $object->multigenerational(),
			'neighbouringObjects' => $object->neighbouringObjects(),
			'numberAndTypeOfHotelRooms' => $object->numberAndTypeOfHotelRooms(),
			'numberOfAbovegroundFloor' => $object->numberOfAbovegroundFloor(),
			'numberOfAccommodationUnits' => $object->numberOfAccommodationUnits(),
			'numberOfApartment' => $object->numberOfApartment(),
			'numberOfNonResidentialUnits' => $object->numberOfNonResidentialUnits(),
			'numberOfParkingPlaces' => $object->numberOfParkingPlaces(),
			'numberOfPlot' => $object->numberOfPlot(),
			'numberOfRooms' => $object->numberOfRooms(),
			'numberOfTelephoneLines' => $object->numberOfTelephoneLines(),
			'numberOfUndergroundFloor' => $object->numberOfUndergroundFloor(),
			'orientation' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Orientation $row): array => $row->toArray(), $object->orientation()->toArray()),
			'parking' => $object->parking()?->toArray(),
			'parkingMulti' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Parking $row): array => $row->toArray(), $object->parkingMulti()->toArray()),
			'pcNetLines' => $object->pcNetLines(),
			'periodOfChargesAndServices' => $object->periodOfChargesAndServices()?->toArray(),
			'periodOfPrice' => $object->periodOfPrice()?->toArray(),
			'pets' => $object->pets(),
			'petsComment' => $object->petsComment(),
			'photos' => \array_map([$this->documentConverter, 'toArray'], $object->getPhotos()),
			'price' => $object->price(),
			'priceComment' => $object->priceComment(),
			'priceHistory' => $object->priceHistory(),
			'priceIncludeCommission' => $object->priceIncludeCommission(),
			'priceToNegotiation' => $object->priceToNegotiation(),
			'priceWithChargesAndServices' => $object->priceWithChargesAndServices(),
			'protectedLandscapeArea' => $object->protectedLandscapeArea()?->toArray(),
			'protectionZone' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\ProtectionZone $row): array => $row->toArray(), $object->protectionZone()->toArray()),
			'reception' => $object->reception(),
			'registrationNumber' => $object->registrationNumber(),
			'roadType' => $object->roadType()?->toArray(),
			'security' => $object->security(),
			'share' => $object->share(),
			'shortTermLease' => $object->shortTermLease(),
			'socialFacilities' => $object->socialFacilities(),
			'sourceOfHotWater' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\SourceOfHotWater $row): array => $row->toArray(), $object->sourceOfHotWater()->toArray()),
			'stamp' => $object->version(),
			'statusOfCommission' => $object->statusOfCommission()?->toArray(),
			'statusOfEstate' => $object->statusOfEstate()?->toArray(),
			'structureOfBuilding' => $object->structureOfBuilding()?->toArray(),
			'subtypeOfRealEstate' => $object->subtypeOfRealEstate()?->toArray(),
			'surety' => $object->surety(),
			'telephoneConnector' => $object->telephoneConnector(),
			'terrace' => $object->terrace(),
			'title' => $object->title(),
			'totalOfFloor' => $object->totalOfFloor(),
			'transportAccessibility' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\TransportAccessibility $row): array => $row->toArray(), $object->transportAccessibility()->toArray()),
			'turnkey' => $object->turnkey(),
			'typeOfCommission' => $object->typeOfCommission()?->toArray(),
			'typeOfContract' => $object->typeOfContract()?->toArray(),
			'typeOfChargesAndServices' => $object->typeOfChargesAndServices()?->toArray(),
			'typeOfOwnership' => $object->typeOfOwnership()?->toArray(),
			'typeOfPrice' => $object->typeOfPrice()?->toArray(),
			'typeOfRealEstate' => $object->typeOfRealEstate()?->toArray(),
			'typeOfRealEstateCadastre' => $object->typeOfRealEstateCadastre()?->toArray(),
			'urlEstateDetail' => $object->urlEstateDetail(),
			'utilisation' => $object->utilisation()?->toArray(),
			'utilisationByLandUsePlanning' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\UtilisationByLandUsePlanning $row): array => $row->toArray(), $object->utilisationByLandUsePlanning()->toArray()),
			'validityOfTreatyFrom' => $object->validityOfTreatyFrom()?->format('c'),
			'validityOfTreatyTo' => $object->validityOfTreatyTo()?->format('c'),
			'water' => $object->water()?->toArray(),
			'yearOfConstruction' => $object->yearOfConstruction(),
			'yearOfRenovation' => $object->yearOfRenovation(),
		];
	}

	public function toObject(array $data): object
    {
        $data = \array_merge(self::EMPTY, $data);

        return new \Codebros\RealkoCommon\Domain\Entity\Estate(
            $data['id'],
            $data['stamp'],
            \array_map([$this->documentConverter, 'toObject'], $data['photos']),
            \array_map([$this->documentConverter, 'toObject'], $data['documents']),
            \array_map([$this->externalDocumentConverter, 'toObject'], $data['externalDocuments']),
            ($data['accessToLot'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\AccessToLot::class, $data['accessToLot']['id'], $data['accessToLot']['title']) : null,
            $data['accommodation'],
            $data['affiliateId'],
            $data['agentId'],
            $data['alimentation'],
            $data['annuity'],
            $data['apartmentInFamilyHouse'],
            $data['areaBuiltUp'],
            $data['areaFloor'],
            $data['areaNonResidential'],
            $data['areaOfBalcony'],
            $data['areaOfCellar'],
            $data['areaOfElevator'],
            $data['areaOfGarden'],
            $data['areaOfLoggia'],
            $data['areaOfLot'],
            $data['areaOfOffice'],
            $data['areaOfSales'],
            $data['areaOfStorage'],
            $data['areaOfTerrace'],
            $data['areaProduction'],
            $data['areaUse'],
            $data['atypical'],
            $data['auctionDate'] ? new \DateTimeImmutable($data['auctionDate']) : null,
            $data['auctionDateTour'] ? new \DateTimeImmutable($data['auctionDateTour']) : null,
            $data['auctionDateTour2'] ? new \DateTimeImmutable($data['auctionDateTour2']) : null,
            ($data['auctionKind'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\AuctionKind::class, $data['auctionKind']['id'], $data['auctionKind']['title']) : null,
            $data['auctionPlace'],
            $data['auctionPriceExpertReport'],
            $data['auctionPriceMinimumBid'],
            $data['auctionPricePrincipal'],
            $data['balcony'],
            $data['blurLocationOnServers'],
            ($data['buildingLien'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\BuildingLien::class, $data['buildingLien']['id'], $data['buildingLien']['title']) : null,
            $data['cableTv'],
            ($data['canalization'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Canalization::class, $data['canalization']['id'], $data['canalization']['title']) : null,
            $data['capacityOfAlimentation'],
            $data['ceilingHeight'],
            $data['cellar'],
            $data['cleaning'],
            $data['clearCeilingHeight'],
            $data['constructionOnLot'],
            ($data['coreOfApartment'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\CoreOfApartment::class, $data['coreOfApartment']['id'], $data['coreOfApartment']['title']) : null,
            $data['crane'],
            $data['craneLoad'],
            ($data['currency'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Currency::class, $data['currency']['id'], $data['currency']['title']) : null,
            $data['dateOfCreation'] ? new \DateTimeImmutable($data['dateOfCreation']) : null,
            $data['dateOfStatusActive'] ? new \DateTimeImmutable($data['dateOfStatusActive']) : null,
            $data['dateOfStatusReservation'] ? new \DateTimeImmutable($data['dateOfStatusReservation']) : null,
            $data['dateOfStatusRealized'] ? new \DateTimeImmutable($data['dateOfStatusRealized']) : null,
            $data['dateOfUpdate'] ? new \DateTimeImmutable($data['dateOfUpdate']) : null,
            $data['description'],
            null,
            ($data['disposition'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Disposition::class, $data['disposition']['id'], $data['disposition']['title']) : null,
            $data['divisionNumberOfPlot'],
            $data['dontAdvertisePrice'],
            $data['duplex'],
            ($data['ecologicalLoad'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\EcologicalLoad::class, $data['ecologicalLoad']['id'], $data['ecologicalLoad']['title']) : null,
            ($data['electricity'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Electricity::class, $data['electricity']['id'], $data['electricity']['title']) : null,
            ($data['electricityOnLot'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\ElectricityOnLot::class, $data['electricityOnLot']['id'], $data['electricityOnLot']['title']) : null,
            $data['elevator'],
            $data['elevatorLoad'],
            ($data['energyPerformanceRating'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceRating::class, $data['energyPerformanceRating']['id'], $data['energyPerformanceRating']['title']) : null,
            $data['energyPerformanceSummary'],
            ($data['energyPerformanceCertificate'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceCertificate::class, $data['energyPerformanceCertificate']['id'], $data['energyPerformanceCertificate']['title']) : null,
            ($data['floor'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Floor::class, $data['floor']['id'], $data['floor']['title']) : null,
            $data['foreigners'],
            $data['foreignersComment'],
            $data['freeFrom'],
            $data['freeImmediately'],
            ($data['furnished'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Furnished::class, $data['furnished']['id'], $data['furnished']['title']) : null,
            \array_map(static fn($row): ?\Codebros\RealkoCommon\Domain\Entity\Furniture => new \Codebros\RealkoCommon\Domain\Entity\Furniture($row['id'], $row['title']), $data['furniture']),
            $data['garden'],
            ($data['gas'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Gas::class, $data['gas']['id'], $data['gas']['title']) : null,
            $data['gpsLat'],
            $data['gpsLng'],
            ($data['heating'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Heating::class, $data['heating']['id'], $data['heating']['title']) : null,
            \array_map(function ($row): \Codebros\RealkoCommon\Domain\Entity\Heating2 {
                return new \Codebros\RealkoCommon\Domain\Entity\Heating2(
                    $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\LocationSource::class, $row['locationSource']['id'], $row['locationSource']['title']),
                    $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Source::class, $row['source']['id'], $row['source']['title']),
                    $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\HeatingElement::class, $row['heatingElement']['id'], $row['heatingElement']['title']),
                );
            }, $data['heating2']),
            $data['heatingComment'],
            $data['householdAppliances'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage {
                return new \Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage($row['id'], $row['title']);
            }, $data['characterOfVillage']),
            $data['chargesAndServices'],
            $data['chargesAndServicesComment'],
            $data['children'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\Infrastructure {
                return new \Codebros\RealkoCommon\Domain\Entity\Infrastructure($row['id'], $row['title']);
            }, $data['infrastructure']),
            ($data['internetConnection'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\InternetConnection::class, $data['internetConnection']['id'], $data['internetConnection']['title']) : null,
            ($data['category'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Category::class, $data['category']['id'], $data['category']['title']) : null,
            ($data['kindOfPlotNumbers'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\KindOfPlotNumbers::class, $data['kindOfPlotNumbers']['id'], $data['kindOfPlotNumbers']['title']) : null,
            $data['lastFloor'],
            $data['location'] ? $this->locationConverter->toObject($data['location']) : null,
            ($data['locality'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Locality::class, $data['locality']['id'], $data['locality']['title']) : null,
            $data['loft'],
            $data['loggia'],
            $data['maximumNumberOfPeople'],
            $data['meetingRoom'],
            $data['minimumRentalPeriod'],
            $data['mortgage'],
            $data['multigenerational'],
            $data['neighbouringObjects'],
            $data['numberAndTypeOfHotelRooms'],
            $data['numberOfAbovegroundFloor'],
            $data['numberOfAccommodationUnits'],
            $data['numberOfApartment'],
            $data['numberOfNonResidentialUnits'],
            $data['numberOfParkingPlaces'],
            $data['numberOfPlot'],
            $data['numberOfRooms'],
            $data['numberOfTelephoneLines'],
            $data['numberOfUndergroundFloor'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\Orientation {
                return new \Codebros\RealkoCommon\Domain\Entity\Orientation($row['id'], $row['title']);
            }, $data['orientation']),
            ($data['parking'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Parking::class, $data['parking']['id'], $data['parking']['title']) : null,
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\Parking {
                return new \Codebros\RealkoCommon\Domain\Entity\Parking($row['id'], $row['title']);
            }, $data['parkingMulti']),
            $data['pcNetLines'],
            ($data['periodOfChargesAndServices'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\PeriodOfChargesAndServices::class, $data['periodOfChargesAndServices']['id'], $data['periodOfChargesAndServices']['title']) : null,
            ($data['periodOfPrice'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\PeriodOfPrice::class, $data['periodOfPrice']['id'], $data['periodOfPrice']['title']) : null,
            $data['pets'],
            $data['petsComment'],
            $data['price'],
            $data['priceComment'],
            null,
            $data['priceHistory'],
            $data['priceIncludeCommission'],
            $data['priceToNegotiation'],
            $data['priceWithChargesAndServices'],
            ($data['protectedLandscapeArea'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\ProtectedLandscapeArea::class, $data['protectedLandscapeArea']['id'], $data['protectedLandscapeArea']['title']) : null,
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\ProtectionZone {
                return new \Codebros\RealkoCommon\Domain\Entity\ProtectionZone($row['id'], $row['title']);
            }, $data['protectionZone']),
            $data['reception'],
            $data['registrationNumber'],
            ($data['roadType'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\RoadType::class, $data['roadType']['id'], $data['roadType']['title']) : null,
            $data['security'],
            $data['share'],
            $data['shortTermLease'],
            ($data['socialFacilities'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\SocialFacilities::class, $data['socialFacilities']['id'], $data['socialFacilities']['title']) : null,
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\SourceOfHotWater {
                return new \Codebros\RealkoCommon\Domain\Entity\SourceOfHotWater($row['id'], $row['title']);
            }, $data['sourceOfHotWater']),
            ($data['statusOfCommission'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\StatusOfCommission::class, $data['statusOfCommission']['id'], $data['statusOfCommission']['title']) : null,
            ($data['statusOfEstate'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\StatusOfEstate::class, $data['statusOfEstate']['id'], $data['statusOfEstate']['title']) : null,
            ($data['structureOfBuilding'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\StructureOfBuilding::class, $data['structureOfBuilding']['id'], $data['structureOfBuilding']['title']) : null,
            ($data['subtypeOfRealEstate'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\SubtypeOfRealEstate::class, $data['subtypeOfRealEstate']['id'], $data['subtypeOfRealEstate']['title']) : null,
            $data['surety'],
            $data['telephoneConnector'],
            $data['terrace'],
            $data['title'],
            null,
            $data['totalOfFloor'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\TransportAccessibility {
                return new \Codebros\RealkoCommon\Domain\Entity\TransportAccessibility($row['id'], $row['title']);
            }, $data['transportAccessibility']),
            $data['turnkey'],
            ($data['typeOfCommission'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfCommission::class, $data['typeOfCommission']['id'], $data['typeOfCommission']['title']) : null,
            ($data['typeOfContract'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfContract::class, $data['typeOfContract']['id'], $data['typeOfContract']['title']) : null,
            ($data['typeOfChargesAndServices'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfChargesAndServices::class, $data['typeOfChargesAndServices']['id'], $data['typeOfChargesAndServices']['title']) : null,
            ($data['typeOfOwnership'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfOwnership::class, $data['typeOfOwnership']['id'], $data['typeOfOwnership']['title']) : null,
            ($data['typeOfPrice'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfPrice::class, $data['typeOfPrice']['id'], $data['typeOfPrice']['title']) : null,
            ($data['typeOfRealEstate'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstate::class, $data['typeOfRealEstate']['id'], $data['typeOfRealEstate']['title']) : null,
            ($data['typeOfRealEstateCadastre'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstateCadastre::class, $data['typeOfRealEstateCadastre']['id'], $data['typeOfRealEstateCadastre']['title']) : null,
            $data['urlEstateDetail'],
            ($data['utilisation'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Utilisation::class, $data['utilisation']['id'], $data['utilisation']['title']) : null,
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Entity\UtilisationByLandUsePlanning {
                return new \Codebros\RealkoCommon\Domain\Entity\UtilisationByLandUsePlanning($row['id'], $row['title']);
            }, $data['utilisationByLandUsePlanning']),
            $data['validityOfTreatyFrom'] ? new \DateTimeImmutable($data['validityOfTreatyFrom']) : null,
            $data['validityOfTreatyTo'] ? new \DateTimeImmutable($data['validityOfTreatyTo']) : null,
            ($data['water'] ?? null) ? $this->enumerationsRepository->findOrCreateNew(\Codebros\RealkoCommon\Domain\Enum\Water::class, $data['water']['id'], $data['water']['title']) : null,
            $data['yearOfConstruction'],
            $data['yearOfRenovation'],
        );
    }

}
