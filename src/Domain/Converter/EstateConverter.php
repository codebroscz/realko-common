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
			'accessToLot' => $object->accessToLot()?->id(),
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
			'auctionKind' => $object->auctionKind()?->id(),
			'auctionPlace' => $object->auctionPlace(),
			'auctionPriceExpertReport' => $object->auctionPriceExpertReport(),
			'auctionPriceMinimumBid' => $object->auctionPriceMinimumBid(),
			'auctionPricePrincipal' => $object->auctionPricePrincipal(),
			'balcony' => $object->balcony(),
			'blurLocationOnServers' => $object->blurLocationOnServers(),
			'buildingLien' => $object->buildingLien()?->id(),
			'cableTv' => $object->cableTv(),
			'canalization' => $object->canalization()?->id(),
			'capacityOfAlimentation' => $object->capacityOfAlimentation(),
			'ceilingHeight' => $object->ceilingHeight(),
			'cellar' => $object->cellar(),
			'cleaning' => $object->cleaning(),
			'clearCeilingHeight' => $object->clearCeilingHeight(),
			'constructionOnLot' => $object->constructionOnLot(),
			'coreOfApartment' => $object->coreOfApartment()?->id(),
			'crane' => $object->crane(),
			'craneLoad' => $object->craneLoad(),
			'currency' => $object->currency()?->id(),
			'dateOfCreation' => $object->dateOfCreation()?->format('c'),
			'dateOfStatusActive' => $object->dateOfStatusActive()?->format('c'),
			'dateOfStatusReservation' => $object->dateOfStatusReservation()?->format('c'),
			'dateOfStatusRealized' => $object->dateOfStatusRealized()?->format('c'),
			'dateOfUpdate' => $object->dateOfUpdate()?->format('c'),
			'description' => $object->description(),
			'disposition' => $object->disposition()?->id(),
			'divisionNumberOfPlot' => $object->divisionNumberOfPlot(),
			'documents' => \array_map([$this->documentConverter, 'toArray'], $object->getDocuments()),
			'dontAdvertisePrice' => $object->dontAdvertisePrice(),
			'duplex' => $object->duplex(),
			'ecologicalLoad' => $object->ecologicalLoad()?->id(),
			'electricity' => $object->electricity()?->id(),
			'electricityOnLot' => $object->electricityOnLot()?->id(),
			'elevator' => $object->elevator(),
			'elevatorLoad' => $object->elevatorLoad(),
			'energyPerformanceRating' => $object->energyPerformanceRating()?->id(),
			'energyPerformanceSummary' => $object->energyPerformanceSummary(),
			'energyPerformanceCertificate' => $object->energyPerformanceCertificate()?->id(),
			'externalDocuments' => \array_map([$this->externalDocumentConverter, 'toArray'], $object->getExternalDocuments()),
			'floor' => $object->floor()?->id(),
			'foreigners' => $object->foreigners(),
			'foreignersComment' => $object->foreignersComment(),
			'freeFrom' => $object->freeFrom()?->format('c'),
			'freeImmediately' => $object->freeImmediately(),
			'furnished' => $object->furnished()?->id(),
			'furniture' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Furniture $row): int => $row->id(), $object->furniture()->toArray()),
			'garden' => $object->garden(),
			'gas' => $object->gas()?->id(),
			'gpsLat' => $object->gpsLat(),
			'gpsLng' => $object->gpsLng(),
			'heating' => $object->heating()?->id(),
			'heating2' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Heating2 $heating): array => [
				'locationSource' => $heating->locationSource()?->id(),
				'source' => $heating->source()?->id(),
				'heatingElement' => $heating->heatingElement()?->id(),
			], $object->heating2()->toArray()),
			'heatingComment' => $object->heatingComment(),
			'householdAppliances' => $object->householdAppliances(),
			'characterOfVillage' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\CharacterOfVillage $row): int => $row->id(), $object->characterOfVillage()->toArray()),
			'chargesAndServices' => $object->chargesAndServices(),
			'chargesAndServicesComment' => $object->chargesAndServicesComment(),
			'children' => $object->children(),
			'infrastructure' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Infrastructure $row): int => $row->id(), $object->infrastructure()->toArray()),
			'internetConnection' => $object->internetConnection()?->id(),
			'category' => $object->category()?->id(),
			'kindOfPlotNumbers' => $object->kindOfPlotNumbers()?->id(),
			'lastFloor' => $object->lastFloor(),
			'location' => $object->location() ? $this->locationConverter->toArray($object->location()) : null,
			'locality' => $object->locality()?->id(),
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
			'orientation' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Orientation $row): int => $row->id(), $object->orientation()->toArray()),
			'parking' => $object->parking()?->id(),
			'parkingMulti' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\Parking $row): int => $row->id(), $object->parkingMulti()->toArray()),
			'pcNetLines' => $object->pcNetLines(),
			'periodOfChargesAndServices' => $object->periodOfChargesAndServices()?->id(),
			'periodOfPrice' => $object->periodOfPrice()?->id(),
			'pets' => $object->pets(),
			'petsComment' => $object->petsComment(),
			'photos' => \array_map([$this->documentConverter, 'toArray'], $object->getPhotos()),
			'price' => $object->price(),
			'priceComment' => $object->priceComment(),
			'priceHistory' => $object->priceHistory(),
			'priceIncludeCommission' => $object->priceIncludeCommission(),
			'priceToNegotiation' => $object->priceToNegotiation(),
			'priceWithChargesAndServices' => $object->priceWithChargesAndServices(),
			'protectedLandscapeArea' => $object->protectedLandscapeArea()?->id(),
			'protectionZone' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\ProtectionZone $row): int => $row->id(), $object->protectionZone()->toArray()),
			'reception' => $object->reception(),
			'registrationNumber' => $object->registrationNumber(),
			'roadType' => $object->roadType()?->id(),
			'security' => $object->security(),
			'share' => $object->share(),
			'shortTermLease' => $object->shortTermLease(),
			'socialFacilities' => $object->socialFacilities(),
			'sourceOfHotWater' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\SourceOfHotWater $row): int => $row->id(), $object->sourceOfHotWater()->toArray()),
			'stamp' => $object->version(),
			'statusOfCommission' => $object->statusOfCommission()?->id(),
			'statusOfEstate' => $object->statusOfEstate()?->id(),
			'structureOfBuilding' => $object->structureOfBuilding()?->id(),
			'subtypeOfRealEstate' => $object->subtypeOfRealEstate()?->id(),
			'surety' => $object->surety(),
			'telephoneConnector' => $object->telephoneConnector(),
			'terrace' => $object->terrace(),
			'title' => $object->title(),
			'totalOfFloor' => $object->totalOfFloor(),
			'transportAccessibility' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\TransportAccessibility $row): int => $row->id(), $object->transportAccessibility()->toArray()),
			'turnkey' => $object->turnkey(),
			'typeOfCommission' => $object->typeOfCommission()?->id(),
			'typeOfContract' => $object->typeOfContract()?->id(),
			'typeOfChargesAndServices' => $object->typeOfChargesAndServices()?->id(),
			'typeOfOwnership' => $object->typeOfOwnership()?->id(),
			'typeOfPrice' => $object->typeOfPrice()?->id(),
			'typeOfRealEstate' => $object->typeOfRealEstate()?->id(),
			'typeOfRealEstateCadastre' => $object->typeOfRealEstateCadastre()?->id(),
			'urlEstateDetail' => $object->urlEstateDetail(),
			'utilisation' => $object->utilisation()?->id(),
			'utilisationByLandUsePlanning' => \array_map(static fn(\Codebros\RealkoCommon\Domain\Entity\UtilisationByLandUsePlanning $row): int => $row->id(), $object->utilisationByLandUsePlanning()->toArray()),
			'validityOfTreatyFrom' => $object->validityOfTreatyFrom()?->format('c'),
			'validityOfTreatyTo' => $object->validityOfTreatyTo()?->format('c'),
			'water' => $object->water()?->id(),
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
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\AccessToLot::class, $data['accessToLot'] ?? 0),
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
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\AuctionKind::class, $data['auctionKind'] ?? 0),
            $data['auctionPlace'],
            $data['auctionPriceExpertReport'],
            $data['auctionPriceMinimumBid'],
            $data['auctionPricePrincipal'],
            $data['balcony'],
            $data['blurLocationOnServers'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\BuildingLien::class, $data['buildingLien'] ?? 0),
            $data['cableTv'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Canalization::class, $data['canalization'] ?? 0),
            $data['capacityOfAlimentation'],
            $data['ceilingHeight'],
            $data['cellar'],
            $data['cleaning'],
            $data['clearCeilingHeight'],
            $data['constructionOnLot'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\CoreOfApartment::class, $data['coreOfApartment'] ?? 0),
            $data['crane'],
            $data['craneLoad'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Currency::class, $data['currency'] ?? 0),
            $data['dateOfCreation'] ? new \DateTimeImmutable($data['dateOfCreation']) : null,
            $data['dateOfStatusActive'] ? new \DateTimeImmutable($data['dateOfStatusActive']) : null,
            $data['dateOfStatusReservation'] ? new \DateTimeImmutable($data['dateOfStatusReservation']) : null,
            $data['dateOfStatusRealized'] ? new \DateTimeImmutable($data['dateOfStatusRealized']) : null,
            $data['dateOfUpdate'] ? new \DateTimeImmutable($data['dateOfUpdate']) : null,
            $data['description'],
            null,
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Disposition::class, $data['disposition'] ?? 0),
            $data['divisionNumberOfPlot'],
            $data['dontAdvertisePrice'],
            $data['duplex'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\EcologicalLoad::class, $data['ecologicalLoad'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Electricity::class, $data['electricity'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\ElectricityOnLot::class, $data['electricityOnLot'] ?? 0),
            $data['elevator'],
            $data['elevatorLoad'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceRating::class, $data['energyPerformanceRating'] ?? 0),
            $data['energyPerformanceSummary'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\EnergyPerformanceCertificate::class, $data['energyPerformanceCertificate'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Floor::class, $data['floor'] ?? 0),
            $data['foreigners'],
            $data['foreignersComment'],
            $data['freeFrom'],
            $data['freeImmediately'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Furnished::class, $data['furnished'] ?? 0),
            \array_map(static fn($row): ?\Codebros\RealkoCommon\Domain\Enum\Furniture => \Codebros\RealkoCommon\Domain\Enum\Furniture::tryFrom($row), $data['furniture']),
            $data['garden'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Gas::class, $data['gas'] ?? 0),
            $data['gpsLat'],
            $data['gpsLng'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Heating::class, $data['heating'] ?? 0),
            \array_map(function ($row): \Codebros\RealkoCommon\Domain\Entity\Heating2 {
                return new \Codebros\RealkoCommon\Domain\Entity\Heating2(
                    $this->enumerationsRepository->get(\Codebros\RealkoCommon\Domain\Enum\LocationSource::class, $row['locationSource']),
                    $this->enumerationsRepository->get(\Codebros\RealkoCommon\Domain\Enum\Source::class, $row['source']),
                    $this->enumerationsRepository->get(\Codebros\RealkoCommon\Domain\Enum\HeatingElement::class, $row['heatingElement']),
//					\Codebros\RealkoCommon\Domain\Enum\LocationSource::tryFrom($row['locationSource'] ?? 0),
//					\Codebros\RealkoCommon\Domain\Enum\Source::tryFrom($row['source'] ?? 0),
//					\Codebros\RealkoCommon\Domain\Enum\HeatingElement::tryFrom($row['heatingElement'] ?? 0),
                );
            }, $data['heating2']),
            $data['heatingComment'],
            $data['householdAppliances'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage {
                return \Codebros\RealkoCommon\Domain\Enum\CharacterOfVillage::tryFrom($row ?? 0);
            }, $data['characterOfVillage']),
            $data['chargesAndServices'],
            $data['chargesAndServicesComment'],
            $data['children'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\Infrastructure {
                return \Codebros\RealkoCommon\Domain\Enum\Infrastructure::tryFrom($row ?? 0);
            }, $data['infrastructure']),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\InternetConnection::class, $data['internetConnection'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Category::class, $data['category'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\KindOfPlotNumbers::class, $data['kindOfPlotNumbers'] ?? 0),
            $data['lastFloor'],
            $data['location'] ? $this->locationConverter->toObject($data['location']) : null,
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Locality::class, $data['locality'] ?? 0),
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
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\Orientation {
                return \Codebros\RealkoCommon\Domain\Enum\Orientation::tryFrom($row ?? 0);
            }, $data['orientation']),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Parking::class, $data['parking'] ?? 0),
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\Parking {
                return \Codebros\RealkoCommon\Domain\Enum\Parking::tryFrom($row ?? 0);
            }, $data['parkingMulti']),
            $data['pcNetLines'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\PeriodOfChargesAndServices::class, $data['periodOfChargesAndServices'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\PeriodOfPrice::class, $data['periodOfPrice'] ?? 0),
            $data['pets'],
            $data['petsComment'],
            $data['price'],
            $data['priceComment'],
            null,
            $data['priceHistory'],
            $data['priceIncludeCommission'],
            $data['priceToNegotiation'],
            $data['priceWithChargesAndServices'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\ProtectedLandscapeArea::class, $data['protectedLandscapeArea'] ?? 0),
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\ProtectionZone {
                return \Codebros\RealkoCommon\Domain\Enum\ProtectionZone::tryFrom($row ?? 0);
            }, $data['protectionZone']),
            $data['reception'],
            $data['registrationNumber'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\RoadType::class, $data['roadType'] ?? 0),
            $data['security'],
            $data['share'],
            $data['shortTermLease'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\SocialFacilities::class, $data['socialFacilities'] ?? 0),
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\SourceOfHotWater {
                return \Codebros\RealkoCommon\Domain\Enum\SourceOfHotWater::tryFrom($row ?? 0);
            }, $data['sourceOfHotWater']),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\StatusOfCommission::class, $data['statusOfCommission'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\StatusOfEstate::class, $data['statusOfEstate'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\StructureOfBuilding::class, $data['structureOfBuilding'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\SubtypeOfRealEstate::class, $data['subtypeOfRealEstate'] ?? 0),
            $data['surety'],
            $data['telephoneConnector'],
            $data['terrace'],
            $data['title'],
            null,
            $data['totalOfFloor'],
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\TransportAccessibility {
                return \Codebros\RealkoCommon\Domain\Enum\TransportAccessibility::tryFrom($row ?? 0);
            }, $data['transportAccessibility']),
            $data['turnkey'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfCommission::class, $data['typeOfCommission'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfContract::class, $data['typeOfContract'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfChargesAndServices::class, $data['typeOfChargesAndServices'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfOwnership::class, $data['typeOfOwnership'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfPrice::class, $data['typeOfPrice'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstate::class, $data['typeOfRealEstate'] ?? 0),
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\TypeOfRealEstateCadastre::class, $data['typeOfRealEstateCadastre'] ?? 0),
            $data['urlEstateDetail'],
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Utilisation::class, $data['utilisation'] ?? 0),
            \array_map(static function ($row): ?\Codebros\RealkoCommon\Domain\Enum\UtilisationByLandUsePlanning {
                return \Codebros\RealkoCommon\Domain\Enum\UtilisationByLandUsePlanning::tryFrom($row ?? 0);
            }, $data['utilisationByLandUsePlanning']),
            $data['validityOfTreatyFrom'] ? new \DateTimeImmutable($data['validityOfTreatyFrom']) : null,
            $data['validityOfTreatyTo'] ? new \DateTimeImmutable($data['validityOfTreatyTo']) : null,
            $this->enumerationsRepository->find(\Codebros\RealkoCommon\Domain\Enum\Water::class, $data['water'] ?? 0),
            $data['yearOfConstruction'],
            $data['yearOfRenovation'],
        );
    }

}
