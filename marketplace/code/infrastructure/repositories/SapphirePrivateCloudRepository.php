<?php
/**
 * Copyright 2014 Openstack.org
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 **/
/**
 * Class SapphirePrivateCloudRepository
 */
final class SapphirePrivateCloudRepository
	extends SapphireOpenStackImplementationRepository {

	public function __construct(){
		parent::__construct(new PrivateCloudService);
	}

	public function delete(IEntity $entity){

		parent::delete($entity);
	}

	/**
	 * @return string
	 */
	protected function getMarketPlaceTypeGroup()
	{
		return IPrivateCloudService::MarketPlaceGroupSlug;
	}
} 