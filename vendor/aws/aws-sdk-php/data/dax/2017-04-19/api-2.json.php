<?php

namespace WP_Cloud_Search;

// This file was auto-generated from sdk-root/src/data/dax/2017-04-19/api-2.json
return ['version' => '2.0', 'metadata' => ['apiVersion' => '2017-04-19', 'endpointPrefix' => 'dax', 'jsonVersion' => '1.1', 'protocol' => 'json', 'serviceAbbreviation' => 'Amazon DAX', 'serviceFullName' => 'Amazon DynamoDB Accelerator (DAX)', 'serviceId' => 'DAX', 'signatureVersion' => 'v4', 'targetPrefix' => 'AmazonDAXV3', 'uid' => 'dax-2017-04-19'], 'operations' => ['CreateCluster' => ['name' => 'CreateCluster', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateClusterRequest'], 'output' => ['shape' => 'CreateClusterResponse'], 'errors' => [['shape' => 'ClusterAlreadyExistsFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'InsufficientClusterCapacityFault'], ['shape' => 'SubnetGroupNotFoundFault'], ['shape' => 'InvalidParameterGroupStateFault'], ['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ClusterQuotaForCustomerExceededFault'], ['shape' => 'NodeQuotaForClusterExceededFault'], ['shape' => 'NodeQuotaForCustomerExceededFault'], ['shape' => 'InvalidVPCNetworkStateFault'], ['shape' => 'TagQuotaPerResourceExceeded'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException'], ['shape' => 'ServiceQuotaExceededException']]], 'CreateParameterGroup' => ['name' => 'CreateParameterGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateParameterGroupRequest'], 'output' => ['shape' => 'CreateParameterGroupResponse'], 'errors' => [['shape' => 'ParameterGroupQuotaExceededFault'], ['shape' => 'ParameterGroupAlreadyExistsFault'], ['shape' => 'InvalidParameterGroupStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'CreateSubnetGroup' => ['name' => 'CreateSubnetGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'CreateSubnetGroupRequest'], 'output' => ['shape' => 'CreateSubnetGroupResponse'], 'errors' => [['shape' => 'SubnetGroupAlreadyExistsFault'], ['shape' => 'SubnetGroupQuotaExceededFault'], ['shape' => 'SubnetQuotaExceededFault'], ['shape' => 'InvalidSubnet'], ['shape' => 'ServiceLinkedRoleNotFoundFault']]], 'DecreaseReplicationFactor' => ['name' => 'DecreaseReplicationFactor', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DecreaseReplicationFactorRequest'], 'output' => ['shape' => 'DecreaseReplicationFactorResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'NodeNotFoundFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DeleteCluster' => ['name' => 'DeleteCluster', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteClusterRequest'], 'output' => ['shape' => 'DeleteClusterResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DeleteParameterGroup' => ['name' => 'DeleteParameterGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteParameterGroupRequest'], 'output' => ['shape' => 'DeleteParameterGroupResponse'], 'errors' => [['shape' => 'InvalidParameterGroupStateFault'], ['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DeleteSubnetGroup' => ['name' => 'DeleteSubnetGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DeleteSubnetGroupRequest'], 'output' => ['shape' => 'DeleteSubnetGroupResponse'], 'errors' => [['shape' => 'SubnetGroupInUseFault'], ['shape' => 'SubnetGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault']]], 'DescribeClusters' => ['name' => 'DescribeClusters', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeClustersRequest'], 'output' => ['shape' => 'DescribeClustersResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DescribeDefaultParameters' => ['name' => 'DescribeDefaultParameters', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeDefaultParametersRequest'], 'output' => ['shape' => 'DescribeDefaultParametersResponse'], 'errors' => [['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DescribeEvents' => ['name' => 'DescribeEvents', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeEventsRequest'], 'output' => ['shape' => 'DescribeEventsResponse'], 'errors' => [['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DescribeParameterGroups' => ['name' => 'DescribeParameterGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeParameterGroupsRequest'], 'output' => ['shape' => 'DescribeParameterGroupsResponse'], 'errors' => [['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DescribeParameters' => ['name' => 'DescribeParameters', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeParametersRequest'], 'output' => ['shape' => 'DescribeParametersResponse'], 'errors' => [['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'DescribeSubnetGroups' => ['name' => 'DescribeSubnetGroups', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'DescribeSubnetGroupsRequest'], 'output' => ['shape' => 'DescribeSubnetGroupsResponse'], 'errors' => [['shape' => 'SubnetGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault']]], 'IncreaseReplicationFactor' => ['name' => 'IncreaseReplicationFactor', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'IncreaseReplicationFactorRequest'], 'output' => ['shape' => 'IncreaseReplicationFactorResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'InsufficientClusterCapacityFault'], ['shape' => 'InvalidVPCNetworkStateFault'], ['shape' => 'NodeQuotaForClusterExceededFault'], ['shape' => 'NodeQuotaForCustomerExceededFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'ListTags' => ['name' => 'ListTags', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'ListTagsRequest'], 'output' => ['shape' => 'ListTagsResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'InvalidARNFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'RebootNode' => ['name' => 'RebootNode', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'RebootNodeRequest'], 'output' => ['shape' => 'RebootNodeResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'NodeNotFoundFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'TagResource' => ['name' => 'TagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'TagResourceRequest'], 'output' => ['shape' => 'TagResourceResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'TagQuotaPerResourceExceeded'], ['shape' => 'InvalidARNFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'UntagResource' => ['name' => 'UntagResource', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UntagResourceRequest'], 'output' => ['shape' => 'UntagResourceResponse'], 'errors' => [['shape' => 'ClusterNotFoundFault'], ['shape' => 'InvalidARNFault'], ['shape' => 'TagNotFoundFault'], ['shape' => 'InvalidClusterStateFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'UpdateCluster' => ['name' => 'UpdateCluster', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateClusterRequest'], 'output' => ['shape' => 'UpdateClusterResponse'], 'errors' => [['shape' => 'InvalidClusterStateFault'], ['shape' => 'ClusterNotFoundFault'], ['shape' => 'InvalidParameterGroupStateFault'], ['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'UpdateParameterGroup' => ['name' => 'UpdateParameterGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateParameterGroupRequest'], 'output' => ['shape' => 'UpdateParameterGroupResponse'], 'errors' => [['shape' => 'InvalidParameterGroupStateFault'], ['shape' => 'ParameterGroupNotFoundFault'], ['shape' => 'ServiceLinkedRoleNotFoundFault'], ['shape' => 'InvalidParameterValueException'], ['shape' => 'InvalidParameterCombinationException']]], 'UpdateSubnetGroup' => ['name' => 'UpdateSubnetGroup', 'http' => ['method' => 'POST', 'requestUri' => '/'], 'input' => ['shape' => 'UpdateSubnetGroupRequest'], 'output' => ['shape' => 'UpdateSubnetGroupResponse'], 'errors' => [['shape' => 'SubnetGroupNotFoundFault'], ['shape' => 'SubnetQuotaExceededFault'], ['shape' => 'SubnetInUse'], ['shape' => 'InvalidSubnet'], ['shape' => 'ServiceLinkedRoleNotFoundFault']]]], 'shapes' => ['AvailabilityZoneList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'AwsQueryErrorMessage' => ['type' => 'string'], 'ChangeType' => ['type' => 'string', 'enum' => ['IMMEDIATE', 'REQUIRES_REBOOT']], 'Cluster' => ['type' => 'structure', 'members' => ['ClusterName' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'ClusterArn' => ['shape' => 'String'], 'TotalNodes' => ['shape' => 'IntegerOptional'], 'ActiveNodes' => ['shape' => 'IntegerOptional'], 'NodeType' => ['shape' => 'String'], 'Status' => ['shape' => 'String'], 'ClusterDiscoveryEndpoint' => ['shape' => 'Endpoint'], 'NodeIdsToRemove' => ['shape' => 'NodeIdentifierList'], 'Nodes' => ['shape' => 'NodeList'], 'PreferredMaintenanceWindow' => ['shape' => 'String'], 'NotificationConfiguration' => ['shape' => 'NotificationConfiguration'], 'SubnetGroup' => ['shape' => 'String'], 'SecurityGroups' => ['shape' => 'SecurityGroupMembershipList'], 'IamRoleArn' => ['shape' => 'String'], 'ParameterGroup' => ['shape' => 'ParameterGroupStatus'], 'SSEDescription' => ['shape' => 'SSEDescription'], 'ClusterEndpointEncryptionType' => ['shape' => 'ClusterEndpointEncryptionType']]], 'ClusterAlreadyExistsFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ClusterEndpointEncryptionType' => ['type' => 'string', 'enum' => ['NONE', 'TLS']], 'ClusterList' => ['type' => 'list', 'member' => ['shape' => 'Cluster']], 'ClusterNameList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ClusterNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ClusterQuotaForCustomerExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'CreateClusterRequest' => ['type' => 'structure', 'required' => ['ClusterName', 'NodeType', 'ReplicationFactor', 'IamRoleArn'], 'members' => ['ClusterName' => ['shape' => 'String'], 'NodeType' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'ReplicationFactor' => ['shape' => 'Integer'], 'AvailabilityZones' => ['shape' => 'AvailabilityZoneList'], 'SubnetGroupName' => ['shape' => 'String'], 'SecurityGroupIds' => ['shape' => 'SecurityGroupIdentifierList'], 'PreferredMaintenanceWindow' => ['shape' => 'String'], 'NotificationTopicArn' => ['shape' => 'String'], 'IamRoleArn' => ['shape' => 'String'], 'ParameterGroupName' => ['shape' => 'String'], 'Tags' => ['shape' => 'TagList'], 'SSESpecification' => ['shape' => 'SSESpecification'], 'ClusterEndpointEncryptionType' => ['shape' => 'ClusterEndpointEncryptionType']]], 'CreateClusterResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'CreateParameterGroupRequest' => ['type' => 'structure', 'required' => ['ParameterGroupName'], 'members' => ['ParameterGroupName' => ['shape' => 'String'], 'Description' => ['shape' => 'String']]], 'CreateParameterGroupResponse' => ['type' => 'structure', 'members' => ['ParameterGroup' => ['shape' => 'ParameterGroup']]], 'CreateSubnetGroupRequest' => ['type' => 'structure', 'required' => ['SubnetGroupName', 'SubnetIds'], 'members' => ['SubnetGroupName' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'SubnetIds' => ['shape' => 'SubnetIdentifierList']]], 'CreateSubnetGroupResponse' => ['type' => 'structure', 'members' => ['SubnetGroup' => ['shape' => 'SubnetGroup']]], 'DecreaseReplicationFactorRequest' => ['type' => 'structure', 'required' => ['ClusterName', 'NewReplicationFactor'], 'members' => ['ClusterName' => ['shape' => 'String'], 'NewReplicationFactor' => ['shape' => 'Integer'], 'AvailabilityZones' => ['shape' => 'AvailabilityZoneList'], 'NodeIdsToRemove' => ['shape' => 'NodeIdentifierList']]], 'DecreaseReplicationFactorResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'DeleteClusterRequest' => ['type' => 'structure', 'required' => ['ClusterName'], 'members' => ['ClusterName' => ['shape' => 'String']]], 'DeleteClusterResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'DeleteParameterGroupRequest' => ['type' => 'structure', 'required' => ['ParameterGroupName'], 'members' => ['ParameterGroupName' => ['shape' => 'String']]], 'DeleteParameterGroupResponse' => ['type' => 'structure', 'members' => ['DeletionMessage' => ['shape' => 'String']]], 'DeleteSubnetGroupRequest' => ['type' => 'structure', 'required' => ['SubnetGroupName'], 'members' => ['SubnetGroupName' => ['shape' => 'String']]], 'DeleteSubnetGroupResponse' => ['type' => 'structure', 'members' => ['DeletionMessage' => ['shape' => 'String']]], 'DescribeClustersRequest' => ['type' => 'structure', 'members' => ['ClusterNames' => ['shape' => 'ClusterNameList'], 'MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeClustersResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'Clusters' => ['shape' => 'ClusterList']]], 'DescribeDefaultParametersRequest' => ['type' => 'structure', 'members' => ['MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeDefaultParametersResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'Parameters' => ['shape' => 'ParameterList']]], 'DescribeEventsRequest' => ['type' => 'structure', 'members' => ['SourceName' => ['shape' => 'String'], 'SourceType' => ['shape' => 'SourceType'], 'StartTime' => ['shape' => 'TStamp'], 'EndTime' => ['shape' => 'TStamp'], 'Duration' => ['shape' => 'IntegerOptional'], 'MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeEventsResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'Events' => ['shape' => 'EventList']]], 'DescribeParameterGroupsRequest' => ['type' => 'structure', 'members' => ['ParameterGroupNames' => ['shape' => 'ParameterGroupNameList'], 'MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeParameterGroupsResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'ParameterGroups' => ['shape' => 'ParameterGroupList']]], 'DescribeParametersRequest' => ['type' => 'structure', 'required' => ['ParameterGroupName'], 'members' => ['ParameterGroupName' => ['shape' => 'String'], 'Source' => ['shape' => 'String'], 'MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeParametersResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'Parameters' => ['shape' => 'ParameterList']]], 'DescribeSubnetGroupsRequest' => ['type' => 'structure', 'members' => ['SubnetGroupNames' => ['shape' => 'SubnetGroupNameList'], 'MaxResults' => ['shape' => 'IntegerOptional'], 'NextToken' => ['shape' => 'String']]], 'DescribeSubnetGroupsResponse' => ['type' => 'structure', 'members' => ['NextToken' => ['shape' => 'String'], 'SubnetGroups' => ['shape' => 'SubnetGroupList']]], 'Endpoint' => ['type' => 'structure', 'members' => ['Address' => ['shape' => 'String'], 'Port' => ['shape' => 'Integer'], 'URL' => ['shape' => 'String']]], 'Event' => ['type' => 'structure', 'members' => ['SourceName' => ['shape' => 'String'], 'SourceType' => ['shape' => 'SourceType'], 'Message' => ['shape' => 'String'], 'Date' => ['shape' => 'TStamp']]], 'EventList' => ['type' => 'list', 'member' => ['shape' => 'Event']], 'IncreaseReplicationFactorRequest' => ['type' => 'structure', 'required' => ['ClusterName', 'NewReplicationFactor'], 'members' => ['ClusterName' => ['shape' => 'String'], 'NewReplicationFactor' => ['shape' => 'Integer'], 'AvailabilityZones' => ['shape' => 'AvailabilityZoneList']]], 'IncreaseReplicationFactorResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'InsufficientClusterCapacityFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'Integer' => ['type' => 'integer'], 'IntegerOptional' => ['type' => 'integer'], 'InvalidARNFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidClusterStateFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidParameterCombinationException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'AwsQueryErrorMessage']], 'exception' => \true, 'synthetic' => \true], 'InvalidParameterGroupStateFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidParameterValueException' => ['type' => 'structure', 'members' => ['message' => ['shape' => 'AwsQueryErrorMessage']], 'exception' => \true, 'synthetic' => \true], 'InvalidSubnet' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'InvalidVPCNetworkStateFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'IsModifiable' => ['type' => 'string', 'enum' => ['TRUE', 'FALSE', 'CONDITIONAL']], 'KeyList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ListTagsRequest' => ['type' => 'structure', 'required' => ['ResourceName'], 'members' => ['ResourceName' => ['shape' => 'String'], 'NextToken' => ['shape' => 'String']]], 'ListTagsResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList'], 'NextToken' => ['shape' => 'String']]], 'Node' => ['type' => 'structure', 'members' => ['NodeId' => ['shape' => 'String'], 'Endpoint' => ['shape' => 'Endpoint'], 'NodeCreateTime' => ['shape' => 'TStamp'], 'AvailabilityZone' => ['shape' => 'String'], 'NodeStatus' => ['shape' => 'String'], 'ParameterGroupStatus' => ['shape' => 'String']]], 'NodeIdentifierList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'NodeList' => ['type' => 'list', 'member' => ['shape' => 'Node']], 'NodeNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'NodeQuotaForClusterExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'NodeQuotaForCustomerExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'NodeTypeSpecificValue' => ['type' => 'structure', 'members' => ['NodeType' => ['shape' => 'String'], 'Value' => ['shape' => 'String']]], 'NodeTypeSpecificValueList' => ['type' => 'list', 'member' => ['shape' => 'NodeTypeSpecificValue']], 'NotificationConfiguration' => ['type' => 'structure', 'members' => ['TopicArn' => ['shape' => 'String'], 'TopicStatus' => ['shape' => 'String']]], 'Parameter' => ['type' => 'structure', 'members' => ['ParameterName' => ['shape' => 'String'], 'ParameterType' => ['shape' => 'ParameterType'], 'ParameterValue' => ['shape' => 'String'], 'NodeTypeSpecificValues' => ['shape' => 'NodeTypeSpecificValueList'], 'Description' => ['shape' => 'String'], 'Source' => ['shape' => 'String'], 'DataType' => ['shape' => 'String'], 'AllowedValues' => ['shape' => 'String'], 'IsModifiable' => ['shape' => 'IsModifiable'], 'ChangeType' => ['shape' => 'ChangeType']]], 'ParameterGroup' => ['type' => 'structure', 'members' => ['ParameterGroupName' => ['shape' => 'String'], 'Description' => ['shape' => 'String']]], 'ParameterGroupAlreadyExistsFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ParameterGroupList' => ['type' => 'list', 'member' => ['shape' => 'ParameterGroup']], 'ParameterGroupNameList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'ParameterGroupNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ParameterGroupQuotaExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ParameterGroupStatus' => ['type' => 'structure', 'members' => ['ParameterGroupName' => ['shape' => 'String'], 'ParameterApplyStatus' => ['shape' => 'String'], 'NodeIdsToReboot' => ['shape' => 'NodeIdentifierList']]], 'ParameterList' => ['type' => 'list', 'member' => ['shape' => 'Parameter']], 'ParameterNameValue' => ['type' => 'structure', 'members' => ['ParameterName' => ['shape' => 'String'], 'ParameterValue' => ['shape' => 'String']]], 'ParameterNameValueList' => ['type' => 'list', 'member' => ['shape' => 'ParameterNameValue']], 'ParameterType' => ['type' => 'string', 'enum' => ['DEFAULT', 'NODE_TYPE_SPECIFIC']], 'RebootNodeRequest' => ['type' => 'structure', 'required' => ['ClusterName', 'NodeId'], 'members' => ['ClusterName' => ['shape' => 'String'], 'NodeId' => ['shape' => 'String']]], 'RebootNodeResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'SSEDescription' => ['type' => 'structure', 'members' => ['Status' => ['shape' => 'SSEStatus']]], 'SSEEnabled' => ['type' => 'boolean'], 'SSESpecification' => ['type' => 'structure', 'required' => ['Enabled'], 'members' => ['Enabled' => ['shape' => 'SSEEnabled']]], 'SSEStatus' => ['type' => 'string', 'enum' => ['ENABLING', 'ENABLED', 'DISABLING', 'DISABLED']], 'SecurityGroupIdentifierList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'SecurityGroupMembership' => ['type' => 'structure', 'members' => ['SecurityGroupIdentifier' => ['shape' => 'String'], 'Status' => ['shape' => 'String']]], 'SecurityGroupMembershipList' => ['type' => 'list', 'member' => ['shape' => 'SecurityGroupMembership']], 'ServiceLinkedRoleNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'ServiceQuotaExceededException' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SourceType' => ['type' => 'string', 'enum' => ['CLUSTER', 'PARAMETER_GROUP', 'SUBNET_GROUP']], 'String' => ['type' => 'string'], 'Subnet' => ['type' => 'structure', 'members' => ['SubnetIdentifier' => ['shape' => 'String'], 'SubnetAvailabilityZone' => ['shape' => 'String']]], 'SubnetGroup' => ['type' => 'structure', 'members' => ['SubnetGroupName' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'VpcId' => ['shape' => 'String'], 'Subnets' => ['shape' => 'SubnetList']]], 'SubnetGroupAlreadyExistsFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SubnetGroupInUseFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SubnetGroupList' => ['type' => 'list', 'member' => ['shape' => 'SubnetGroup']], 'SubnetGroupNameList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'SubnetGroupNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SubnetGroupQuotaExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SubnetIdentifierList' => ['type' => 'list', 'member' => ['shape' => 'String']], 'SubnetInUse' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'SubnetList' => ['type' => 'list', 'member' => ['shape' => 'Subnet']], 'SubnetQuotaExceededFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'TStamp' => ['type' => 'timestamp'], 'Tag' => ['type' => 'structure', 'members' => ['Key' => ['shape' => 'String'], 'Value' => ['shape' => 'String']]], 'TagList' => ['type' => 'list', 'member' => ['shape' => 'Tag']], 'TagNotFoundFault' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'TagQuotaPerResourceExceeded' => ['type' => 'structure', 'members' => [], 'exception' => \true], 'TagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceName', 'Tags'], 'members' => ['ResourceName' => ['shape' => 'String'], 'Tags' => ['shape' => 'TagList']]], 'TagResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList']]], 'UntagResourceRequest' => ['type' => 'structure', 'required' => ['ResourceName', 'TagKeys'], 'members' => ['ResourceName' => ['shape' => 'String'], 'TagKeys' => ['shape' => 'KeyList']]], 'UntagResourceResponse' => ['type' => 'structure', 'members' => ['Tags' => ['shape' => 'TagList']]], 'UpdateClusterRequest' => ['type' => 'structure', 'required' => ['ClusterName'], 'members' => ['ClusterName' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'PreferredMaintenanceWindow' => ['shape' => 'String'], 'NotificationTopicArn' => ['shape' => 'String'], 'NotificationTopicStatus' => ['shape' => 'String'], 'ParameterGroupName' => ['shape' => 'String'], 'SecurityGroupIds' => ['shape' => 'SecurityGroupIdentifierList']]], 'UpdateClusterResponse' => ['type' => 'structure', 'members' => ['Cluster' => ['shape' => 'Cluster']]], 'UpdateParameterGroupRequest' => ['type' => 'structure', 'required' => ['ParameterGroupName', 'ParameterNameValues'], 'members' => ['ParameterGroupName' => ['shape' => 'String'], 'ParameterNameValues' => ['shape' => 'ParameterNameValueList']]], 'UpdateParameterGroupResponse' => ['type' => 'structure', 'members' => ['ParameterGroup' => ['shape' => 'ParameterGroup']]], 'UpdateSubnetGroupRequest' => ['type' => 'structure', 'required' => ['SubnetGroupName'], 'members' => ['SubnetGroupName' => ['shape' => 'String'], 'Description' => ['shape' => 'String'], 'SubnetIds' => ['shape' => 'SubnetIdentifierList']]], 'UpdateSubnetGroupResponse' => ['type' => 'structure', 'members' => ['SubnetGroup' => ['shape' => 'SubnetGroup']]]]];
